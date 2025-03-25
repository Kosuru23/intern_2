<?php    
class user {

    public $email;
    public $password;
    private $pdo;

    function __construct($db) {
        $this->pdo = $db->connect();
    }

    function get_indicator() {
        $sql = "SELECT * FROM indicator";

        $query = $this->pdo->prepare($sql);

        $data = null;

        if($query->execute()) {
            $data = $query->fetchAll();
        }
        return $data;
    }

    function get_def() {
        $sql = "SELECT MAX(id) AS id, name FROM definitions GROUP BY name";

        $query = $this->pdo->prepare($sql);

        $data = null;

        if($query->execute()) {
            $data = $query->fetchAll();
        }
        return $data;
    }

    function uploadImage($def_id, $fileName, $filePath, $created_at) {
        $sql = "INSERT INTO images (def_id, image_name, image_path, created_at) 
                VALUES (:def_id, :image_name, :image_path, :created_at)";
    
        $query = $this->pdo->prepare($sql);
    
        $query->bindParam(":def_id", $def_id);
        $query->bindParam(":image_name", $fileName);
        $query->bindParam(":image_path", $filePath);
        $query->bindParam(":created_at", $created_at);
    
        return $query->execute();
    }
    
    function load() {
        $sql = "SELECT * FROM definitions";

        $query = $this->pdo->prepare($sql);

        $data = null;

        if($query->execute()) {
            $data = $query->fetchAll();
        }
        return $data;
    }

    function soft_delete($id, $deleted) {
        $sql = "UPDATE definitions SET deleted = :deleted WHERE id = :id";

        $query = $this->pdo->prepare($sql);

        $query->bindParam(":deleted", $deleted);
        $query->bindParam(":id", $id);

        return $query->execute();
    }

    function edit($indicator_name, $name, $description, $updated_at, $recordid) {
        $sql = "UPDATE definitions SET name = :name, description = :description, indicator_name = :indicator_name, updated_at = :updated_at WHERE id = :id";

        $query = $this->pdo->prepare($sql);

        $query->bindParam(":name", $name);
        $query->bindParam(":description", $description);    
        $query->bindParam(":indicator_name", $indicator_name);
        $query->bindParam(":updated_at", $updated_at);
        $query->bindParam(":id", $recordid);

        return $query->execute();
    }

    function fetch($recordid) {
        $sql = "SELECT * FROM definitions WHERE id = :id";

        $query = $this->pdo->prepare($sql);

        $query->bindParam(":id", $recordid);

        $data = null;

        if($query->execute()) {
            $data = $query->fetch();
        }
        return $data;
    }

    function location($name) {
        $sql = "SELECT * FROM definitions WHERE (indicator_name = :name) AND (deleted != 1) ";

        $query = $this->pdo->prepare($sql);

        $query->bindParam(":name", $name);

        $data = null;

        if($query->execute()) {
            $data = $query->fetchAll();
        }
        return $data;
    }

    function add($indicator_name, $name, $description, $created_at) {
        $sql = "INSERT INTO definitions (name, description, created_at, indicator_name) 
                VALUES (:name, :description, :created_at, :indicator_name)";
    
        $query = $this->pdo->prepare($sql);
    
        $query->bindParam(":name", $name);
        $query->bindParam(":description", $description);    
        $query->bindParam(":indicator_name", $indicator_name);
        $query->bindParam(":created_at", $created_at);
    
        return $query->execute();
    }

    function order($name, $in_name) {
        $sql = "SELECT description FROM definitions WHERE (name = :name) AND (indicator_name = :in_name) AND (deleted != 1) ORDER BY created_at";

        $query = $this->pdo->prepare($sql);

        $query->bindParam(":name", $name);
        $query->bindParam(":in_name", $in_name);

        $data = null;

        if($query->execute()) {
            $data = $query->fetchAll();
        }
        return $data;
    }

    function fetch_image($formatted_name) {
        // SQL query with a placeholder for `name`
        $sql = "SELECT image_path FROM images JOIN definitions ON images.def_id = definitions.id WHERE REPLACE(definitions.name, '_', ' ') = :name";
    
        $query = $this->pdo->prepare($sql);
    
        // Bind the formatted name parameter
        $query->bindParam(":name", $formatted_name, PDO::PARAM_STR);
    
        $data = null;
    
        if ($query->execute()) {
            $data = $query->fetch(PDO::FETCH_ASSOC); // Fetch associative array
        }
        
        return $data;
    }
    
}
?>