<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MenuModel extends MY_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->table = 'menu_management';
    }
    public function GetAll()
    {
        $this->db->order_by("`key` <> 'background',
        key", "asc");
        $query = $this->db->get($this->table);
        $rs = $query->result();
        return $rs;
    }
    public function GetMenuIsVisible()
    {
        $this->db->where('visible', 1);
        $this->db->order_by("`key` <> 'background',
        key", "asc");
        $query = $this->db->get($this->table);
        $rs = $query->result();
        return $rs;
    }
    public function SetVisibleMenu($isVisibleItem)
    {
        $sql = "
        UPDATE menu_management
        SET `visible` = 0
        WHERE `value` NOT IN (" . implode(',', array_fill(0, count($isVisibleItem), '?')) . ");
        ";
        $rs = $this->db->query($sql, $isVisibleItem);
        $sql = "
        UPDATE menu_management
        SET `visible` = 1
        WHERE `value` IN (" . implode(',', array_fill(0, count($isVisibleItem), '?')) . ");
        ";
        $rs = $this->db->query($sql, $isVisibleItem);
        return $rs;
    }
}

/* End of file ShareModel.php */
/* Location: ./application/models/ShareModel.php */
