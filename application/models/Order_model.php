<?php

class Order_model extends CRUD_Model
{

    public function __construct()
    {
        $this->table_name = 'orders';
        $this->field = "id";
    }

    /*** start admin orders ***/

    function get_user_orders()
    {

        $this->db->select("*");
        $this->db->from($this->table_name);
        $this->db->where(['payment_status'=> 1, 'mem_id'=> $this->session->mem_id]);
        $this->db->order_by('order_status', 'ASC');
        $query = $this->db->get();
        return $query->result();
    }

    function get_user_total_invested()
    {

        $this->db->select("SUM(total_price) as total_invested");
        $this->db->from($this->table_name);
        $this->db->where(['payment_status'=> 1, 'mem_id'=> $this->session->mem_id]);
        $query = $this->db->get();
        return $query->row()->total_invested;
    }

    function get_user_transactions()
    {

        $this->db->select("*");
        $this->db->from($this->table_name);
        $this->db->where(['payment_status'=> 1, 'mem_id'=> $this->session->mem_id]);
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }

    function user_today_orders()
    {

        $this->db->select("*");
        $this->db->from($this->table_name);
        $this->db->where(['payment_status'=> 1, 'mem_id'=> $this->session->mem_id, 'order_date'=> date('Y-m-d')]);
        $this->db->order_by('order_status', 'ASC');
        $query = $this->db->get();
        return $query->result();
    }

    

    function get_user_order_pagination($params = array()){ 
        $this->db->select('*'); 
        $this->db->from($this->table_name); 
        $this->db->where(['payment_status'=> 1, 'mem_id'=> $this->session->mem_id]); 

        if(array_key_exists("where", $params)){ 
            foreach($params['where'] as $key => $val){ 
                $this->db->where($key, $val); 
            } 
        } 
         
        if(array_key_exists("returnType", $params) && $params['returnType'] == 'count'){ 
            $result = $this->db->count_all_results(); 
        }
        else
        { 
            if(array_key_exists("id", $params) || (array_key_exists("returnType", $params) && $params['returnType'] == 'single')){ 
                if(!empty($params['id'])){ 
                    $this->db->where('id', $params['id']); 
                } 
                $query = $this->db->get(); 
                $result = $query->row_array(); 
            }else{ 
                $this->db->order_by('order_status', 'ASC'); 
                if(array_key_exists("start",$params) && array_key_exists("limit",$params)){ 
                    $this->db->limit($params['limit'],$params['start']); 
                }elseif(!array_key_exists("start",$params) && array_key_exists("limit",$params)){ 
                    $this->db->limit($params['limit']); 
                } 
                 
                $query = $this->db->get(); 
                $result = ($query->num_rows() > 0)?$query->result_array():FALSE; 
            } 
        } 
         
        // Return fetched data 
        return $result; 
    }
    
    function get_user_transaction_pagination($params = array()){ 
        $this->db->select('*'); 
        $this->db->from($this->table_name); 
        $this->db->where(['payment_status'=> 1, 'mem_id'=> $this->session->mem_id]); 

         
        if(array_key_exists("returnType", $params) && $params['returnType'] == 'count'){ 
            $result = $this->db->count_all_results(); 
        }
        else
        { 
            if(array_key_exists("id", $params) || (array_key_exists("returnType", $params) && $params['returnType'] == 'single')){ 
                if(!empty($params['id'])){ 
                    $this->db->where('id', $params['id']); 
                } 
                $query = $this->db->get(); 
                $result = $query->row_array(); 
            }else{ 
                $this->db->order_by('id', 'DESC'); 
                if(array_key_exists("start",$params) && array_key_exists("limit",$params)){ 
                    $this->db->limit($params['limit'],$params['start']); 
                }elseif(!array_key_exists("start",$params) && array_key_exists("limit",$params)){ 
                    $this->db->limit($params['limit']); 
                } 
                 
                $query = $this->db->get(); 
                $result = ($query->num_rows() > 0)?$query->result_array():FALSE; 
            } 
        } 
         
        // Return fetched data 
        return $result; 
    }

    function get_admin_orders()
    {

        $this->db->select("*");
        $this->db->from($this->table_name);
        $this->db->order_by('order_status', 'ASC');
        $query = $this->db->get();
        return $query->result();
    }

    function get_admin_order($order_id)
    {

        $this->db->select("*");
        $this->db->from($this->table_name);
        $this->db->where('id', $order_id);
        $query = $this->db->get();
        return $query->row();
    }

    /*** end admin orders ***/

    /*** start mem orders ***/



    function get_order_total($oid)
    {

        $this->db->select("o.* ,
         @product_total := IFNULL((select sum(qty*price) from tbl_order_detail where o_id = o.id), 0) as product_total, count(od.id) as product_count", FALSE);
        $this->db->from($this->table_name.' o');
        $this->db->join('order_detail od', 'od.o_id = o.id');
        $this->db->where('o.id', $oid);
        $this->db->group_by('o.id');
        $row = $this->db->get()->row();
        return floatval($row->total_price);
    }

    function get_mem_orders($mem_id, $start = '', $offset = '', $order_by = 'desc')
    {
        $this->db->select("o.*,
         @product_total := IFNULL((select sum(qty*price) from tbl_order_detail where o_id = o.id), 0) as product_total, count(od.id) as product_count, ROUND(@product_total*o.tax/100, 2) as tax_amount", FALSE);
        $this->db->from($this->table_name.' o');
        $this->db->join('order_detail od', "o.id = od.o_id");
        $this->db->join('products p', "p.id = od.p_id");
        $this->db->where('o.mem_id', $mem_id);
        // $this->db->where('o.status', 2);
        $this->db->group_by('o.id');

        if (!empty($order_by))
            $this->db->order_by("o.id", $order_by);
        if (!empty($offset))
            $this->db->limit($offset, $start);

        $query = $this->db->get($this->table_name);
        $rows = array();
        foreach ($query->result() as $key => $row) {
            $row->products = $this->get_detail($row->id);
            $rows[$key] = $row;
        }
        return $rows;
    }

    function get_mem_order($mem_id, $o_id)
    {
        $this->db->select("o.*, concat(m.mem_fname, ' ', m.mem_lname) as mem_name, m.mem_fname,
         @product_total := IFNULL((select sum(qty*price) from tbl_order_detail where o_id = o.id), 0) as product_total, count(od.id) as product_count, ROUND(@product_total*o.tax/100, 2) as tax_amount", FALSE);
        $this->db->from($this->table_name.' o');
        $this->db->join('order_detail od', "o.id = od.o_id");
        $this->db->join('products p', "p.id = od.p_id");
        $this->db->join('members m', 'm.mem_id = o.mem_id');
        $this->db->where('o.mem_id', $mem_id);
        $this->db->where('o.id', $o_id);
        $this->db->group_by('o.id');
        
        $query = $this->db->get();
        $row = $query->row();
        if($row)
            $row->products = $this->get_detail($row->id);
        return $row;
    }

    function get_order($o_id)
    {
        $this->db->select("o.*,
         @product_total := IFNULL((select sum(qty*price) from tbl_order_detail where o_id = o.id), 0) as product_total, count(od.id) as product_count, ROUND(@product_total*o.tax/100, 2) as tax_amount", FALSE);
        $this->db->from($this->table_name.' o');
        $this->db->join('order_detail od', "o.id = od.o_id");
        $this->db->join('products p', "p.id = od.p_id");
        $this->db->where('o.id', $o_id);
        $this->db->group_by('o.id');
        
        $query = $this->db->get();
        $row = $query->row();
        if($row)
            $row->products = $this->get_detail($row->id);
        return $row;
    }

    function get_mem_recent_order($mem_id)
    {
        $this->db->select('o.*');
        $this->db->from($this->table_name.' o');
        $this->db->join('order_detail od', "o.id = od.o_id");
        $this->db->join('products p', "p.id = od.p_id");
        $this->db->where('o.mem_id', $mem_id);
        $this->db->where('o.status<>', 2);
        $this->db->group_by('o.id');
        $this->db->order_by('od.id', 'desc');
        $this->db->limit(1);
        
        $query = $this->db->get();
        // die($this->db->last_query());
        $row = $query->row();
        if($row)
            $row->products = $this->get_detail($row->id);
        return $row;
    }

    function total_mem_orders($mem_id = 0)
    {
        $this->db->select('o.*');
        $this->db->from($this->table_name.' o');
        $this->db->join('order_detail od', "o.id = od.o_id");
        $this->db->join('products p', "p.id = od.p_id");
        $this->db->where('p.mem_id', $mem_id);
        $this->db->group_by('o.id');
        $query = $this->db->get();

        return intval($query->num_rows());
    }

    function get_mem_order_detail($mem_id, $o_id)
    {
        $this->db->select('od.*, title, detail, image');
        $this->db->from('order_detail od ');
        $this->db->join('products p', "p.id = od.p_id");
        $this->db->where('o_id', $o_id);
        $this->db->where('p.mem_id', $mem_id);

        $query = $this->db->get();
        return $query->result();
    }

    /*** end mem orders ***/

    function get_detail($o_id)
    {
        $this->db->select('od.*, title, detail, image');
        $this->db->from('order_detail od');
        $this->db->join('products p', "p.id = od.p_id");
        $this->db->where('o_id', $o_id);
        $this->db->order_by('od.id', 'ASC');
        $query = $this->db->get();
        return $query->result();

    }

    function delete_detail($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('order_detail');
    }

    function save_detail($vals, $id = '')
    {
        $this->db->set($vals);
        if ($id != '') {
            $this->db->where('id', $id);
            $this->db->update('order_detail');
            return $id;
        } else {
            $this->db->insert('order_detail');
            return $this->db->insert_id();
        }
    }
}

?>