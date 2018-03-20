<?php 

class Client extends Manager {
    
    
    
    public function getListClients() {
        
        $db       = $this->_db;
        $request  = $db->query('SELECT * FROM client WHERE nom_client like("%a%")');
        $result   = $request->fetchAll(PDO::FETCH_ASSOC);        
        return $result;
    }
    
    
    
    public function getUserInactives() {
        
    }
    
    
}