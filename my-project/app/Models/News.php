<?php
namespace App\Models;

use Illuminate\Contracts\Redis\Connector;
use Illuminate\Support\Facades\DB;

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");

class News{

    public static function getData(){

        $type = $_GET['type'];
        $pdo = Connection::getConnection();
        

        
        switch ($type) {
            case 'all':
                $response = $pdo->query("SELECT id,category,title,likes,views,dislikes FROM news ORDER BY id DESC LIMIT 10")->fetchALL();
                break;
            case 'books':
                $response = $pdo->query("SELECT id,category,title,likes,views,dislikes FROM news WHERE category = 'books' ORDER BY id DESC LIMIT 10")->fetchALL();
                break;
            case 'films':
                $response = $pdo->query("SELECT id,category,title,likes,views,dislikes FROM news WHERE category = 'films' ORDER BY id DESC LIMIT 10")->fetchALL();
                break;
            case 'games':
                $response = $pdo->query("SELECT id,category,title,likes,views,dislikes FROM news WHERE category = 'games' ORDER BY id DESC LIMIT 10")->fetchALL();
                break;
            case 'finances':
                $response = $pdo->query("SELECT id,category,title,likes,views,dislikes FROM news WHERE category = 'finances' ORDER BY id DESC LIMIT 10")->fetchALL();
                break;
            case 'single':
                $targetId = $_GET['newsId'];
                $response = $pdo->query("SELECT * FROM news where id = $targetId")->fetch();
                break;
            default:
                $response = [
                    "status" => "error",
                    "message" =>"wrong filter type recieved"
                ];
                break;
        }
        echo json_encode($response, JSON_UNESCAPED_UNICODE);
    }
    public static function updateNews(){
        $pdo = Connection::getConnection();
        $id = $_GET['id'];
        $updateType = $_GET['updateType'];
        // $query = DB::update('UPDATE news SET ? = ? + 1 WHERE id = ?', [$updateType, $updateType, $id]);
        $pdo->query("UPDATE news SET $updateType = $updateType + 1 WHERE id = $id");
    }
}