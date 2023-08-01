<?php 

class Dashboard_model {
    private $table = 'users';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getCountUsers()
    {
        $query = $this->db->query('SELECT COUNT(*) as total FROM ' . $this->table);
        $query = $this->db->single();
        $result = $query;

        if (isset($result['total'])) {
            return $result['total'];
        }
    
        return 0;
    }
    public function getCountEvent()
    {
        $query = $this->db->query('SELECT COUNT(*) as total_event FROM articles');
        $query = $this->db->single();
        $result = $query;

        if (isset($result['total_event'])) {
            return $result['total_event'];
        }
    
        return 0;
    }
    public function getCountParticipant()
    {
        $query = $this->db->query('SELECT COUNT(*) as total_participant FROM categories');
        $query = $this->db->single();
        $result = $query;

        if (isset($result['total_participant'])) {
            return $result['total_participant'];
        }
    
        return 0;
    }
}