<?php
require(__DIR__ . "/partials/nav.php");
?>
<h1>Home</h1>
<?php
if (is_logged_in()) {
    echo "Welcome, " . get_user_email();
} else {
    echo "You're not logged in";
}
//shows session info
echo "<pre>" . var_export($_SESSION, true) . "</pre>";
echo has_role('Admin');

$db = getDB();
        $stmt = $db->prepare("select 
        UserRoles.role_id , UserRoles.is_active, Users.email
        from UserRoles
        inner join Users on UserRoles.user_id=Users.id
        where user_id=10");
        try {
            $r = $stmt->execute([]);
            if ($r) {
                $user = $stmt->fetch(PDO::FETCH_ASSOC);
                $db = getDB();
                $stmt = $db->prepare("SELECT UserRoles.role_id , UserRoles.is_active, Users.email
                from UserRoles
                inner join Users on UserRoles.user_id=Users.id
                where user_id=10");
                try {
                    $r = $stmt->execute();
                    if ($r) {
                        $user = $stmt->fetch(PDO::FETCH_ASSOC);
                        echo $user['email'];
                    }
                }

                catch(Exception $e){
                    echo $e;
                }
            }
            }catch(Exception $e){
                echo $e;
            }

?>