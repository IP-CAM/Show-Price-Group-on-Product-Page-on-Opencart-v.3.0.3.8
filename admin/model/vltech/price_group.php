<?php
class ModelVltechPriceGroup extends Model
{
    public function setup() {
        $result = $this->db->query("SHOW COLUMNS FROM " . DB_PREFIX . "product_discount LIKE 'group_type'");

        if(empty($result->num_rows)) {
            $this->db->query("ALTER TABLE " . DB_PREFIX . "product_discount ADD COLUMN group_type VARCHAR(250) DEFAULT 'unit'");
        }

        $result = $this->db->query("SHOW COLUMNS FROM " . DB_PREFIX . "product_discount LIKE 'group_value'");

        if(empty($result->num_rows)) {
            $this->db->query("ALTER TABLE " . DB_PREFIX . "product_discount ADD COLUMN group_value INT(11) DEFAULT 0");
        }
    }
}