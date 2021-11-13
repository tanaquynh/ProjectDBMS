<?= 
    "<div class=\"employee\">
    <div class=\"listBox\">
        <div class=\"table-title\">Danh sách nhân viên</div>
        <!-- <div class=\"table-list\"> -->
            <table>
                <thead>
                    <tr>
                        <td>Mã nhân viên</td>
                        <td>Họ tên</td>
                        <td>Ngày sinh</td>
                        <td>Giới tính</td>
                        <td>Phòng ban</td>
                        <td>Chức vụ</td>
                        <td>Chỉnh sửa</td>
                    </tr>
                </thead>
                <tbody>" 
?>
<?php
                for ($i = 0; $i < sizeof($data["data"]); ++$i) {
                    $temp = $data["data"][$i];
                    echo "<tr>
                    <td>". $temp->employeeID ."</td>
                    <td>". $temp->name ."</td>
                    <td>". $temp->ngaysinh ."</td>
                    <td>". $temp->gioitinh ."</td>
                    <td>". $temp->departmentName ."</td>
                    <td>". $temp->positionName ."</td>
                    <td class=\"onlyEdit\" onclick=\"toggleChangeProfile(this)\"><ion-icon name=\"pencil-outline\"></ion-icon></td>
                    </tr>";
                }
?>
<?=
                "</tbody>
            </table>
            <div class=\"btnBox\">
                <div class=\"btn\">
                    <div class=\"del-btn\">
                        <a href=\"#\"><ion-icon name=\"trash-outline\"></ion-icon> Xoá</a>
                    </div>
                    <div class=\"pre-btn\">
                        <a href=\"#\"><ion-icon name=\"chevron-back-outline\"></ion-icon> Trước</a>
                    </div>
                    <div class=\"next-btn\">
                        <a href=\"#\">Sau <ion-icon name=\"chevron-forward-outline\"></ion-icon></a>
                    </div>
                </div>
            </div>
        <!-- </div> -->
    </div>
    <div class=\"left-content-employee\">
    <div class=\"change-employee\">
        <div class=\"add active\">
            <div class=\"title\">Thêm nhân viên</div>
            <div class=\"formBox\">
                <form method=\"POST\">
                    <div>
                        <label>
                            Họ tên
                            <input type=\"text\"name=\"name\">
                        </label>
                    </div>
                    <div>
                        <label>
                            Ngày sinh
                            <input type=\"text\" name=\"dateofbirth\">
                        </label>
                    </div>
                    <div>
                        <label>Giới tính</label>
                        <select name=\"sex\" >
                            <option></option>
                            <option value=\"Nam\">Nam</option>
                            <option value=\"Nữ\">Nữ</option>
                        </select>
                    </div>
                    <div>
                        <label>Quê quán</label>
                        <input type=\"text\" name=\"quequan\">
                    </div>
                    <div>
                        <label>
                        Chức vụ</label>
                        <select name=\"position\">
                            <option value=\"Nhân viên\">Nhân viên</option>
                            <option value=\"Nhân viên\">Nhân viên</option>
                            <option value=\"Phó trưởng phòng\">Phó trưởng phòng</option>
                            <option value=\"Trưởng phòng\">Trưởng phòng</option>
                        </select>                                         
                    </div>
                    <div>
                        <label>Phòng ban</label>
                        <select name=\"office\">
                            <option value=\"Phòng nhân sự\">Phòng nhân sự</option>
                            <option value=\"Phòng Marketing\">Phòng Marketing</option>
                            <option value=\"Phòng nhân sự\">Phòng nhân sự</option>
                            <option value=\"Phòng kế toán\">Phòng kế toán</option>
                        </select>
                    </div>"; 
?>

<?=

                    "<div id=\"submit\">
                        <input type=\"submit\">
                    </div>
                </form>
            </div>
        </div>
        
        <div class=\"edit\">
            <div class=\"title\">Sửa thông tin nhân viên</div>
            <div class=\"formBox\">
                <form method=\"POST\">
                    <div>
                        <label>
                            Họ tên
                            <input type=\"text\"name=\"nameEdit\" value=\"\">
                        </label>
                    </div>
                    <div>
                        <label>
                            Ngày sinh
                            <input type=\"text\" name=\"dateofbirthEdit\" value=\"\">
                        </label>
                    </div>
                    <div id=\"chung\">
                        <div>
                            <label>Giới tính</label>
                            <select name=\"sexEdit\">
                                <option value=\"Nam\">Nam</option>
                                <option value=\"Nam\">Nam</option>
                                <option value=\"Nữ\">Nữ</option>
                            </select>
                        </div>
                        <div>
                            <label>
                                Ma nhan vien
                                <input type=\"text\" name=\"emIDEdit\" value=\"\">
                            </label>
                        </div>
                    </div>
                    <div>
                        <label>Quê quán</label>
                        <input type=\"text\" name=\"quequanEdit\" value=\"\">
                    </div>
                    <div>
                        <label>
                            Chức vụ</label>
                            <select name=\"positionEdit\">
                                <option>Nhân viên</option>
                                <option value=\"Nhân viên\">Nhân viên</option>
                                <option value=\"Phó trưởng phòng\">Phó trưởng phòng</option>
                                <option value=\"Trưởng phòng\">Trưởng phòng</option>
                            </select>                                        
                    </div>
                    <div>
                        <label>Phong ban</label>
                        <select name=\"officeEdit\">
                            <option>Phòng nhân sự</option>
                            <option value=\"Phòng Marketing\">Phòng Marketing</option>
                            <option value=\"Phòng nhân sự\">Phòng nhân sự</option>
                            <option value=\"Phòng kế toán\">Phòng kế toán</option>
                        </select>
                    </div>"
?>

<?=
                    "<div class=\"btn-in-edit\">
                        <div id=\"submit\">
                            <input type=\"submit\">
                        </div>
                        <div id=\"backtoadd\">
                            <input class=\"onlyEdit\" onclick=\"toggleChangeProfile(this)\" type=\"button\" value=\"Quay lại thêm nhân viên\">
                        </div>
                    </div>
                </form>
            </div>
        </div>    
    </div>
    </div>
</div>"
?>