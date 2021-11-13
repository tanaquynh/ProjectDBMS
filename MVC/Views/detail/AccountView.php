<?= "<div class=\"account\">
        <div class=\"title\">Thay đổi mật khẩu</div>
            <div class=\"formBox\">
                <form method=\"POST\">
                    <div>
                        <label>
                            <input type=\"password\" name=\"password\" placeholder=\"Mật khẩu cũ\">
                        </label>
                    </div>
                    <div>
                        <label>
                            <input type=\"password\" name=\"newpassword\" placeholder=\"Mật khẩu mới\">
                        </label>
                    </div>"
 ?>
                    <?php 
                        if (isset($_POST["password"]) && isset($_POST["newpassword"])) {
                            if (!$this->checkPass()) {
                                echo "<div class=\"alert\">* Mật khẩu hoặc tên đăng nhập chưa chính xác.</div>";
                            }
                            else {
                                $this->saveNewPass();
                            }
                        }                    
                    ?>

<?=                    "<div id=\"submit\">
                        <input type=\"submit\">
                    </div>
                </form>
            </div>
        </div>
    </div>" 
?>