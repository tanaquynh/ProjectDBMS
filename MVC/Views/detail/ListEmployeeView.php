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
                <tbody>
                    <tr onclick=\"clickRow(this)\">
                        <td>MA1000</td>
                        <td>Nguyen Van A</td>
                        <td>01/01/1990</td>
                        <td>Nam</td>
                        <td>Phong nhan su</td>
                        <td>Nhan vien</td>
                        <td class=\"onlyEdit\" onclick=\"toggleChangeProfile(this)\"><ion-icon name=\"pencil-outline\"></ion-icon></td>
                    </tr>
                    <tr onclick=\"clickRow(this)\">
                        <td>MA1000</td>
                        <td>Nguyen Van A</td>
                        <td>01/01/1990</td>
                        <td>Nam</td>
                        <td>Phong nhan su</td>
                        <td>Nhan vien</td>
                        <td class=\"onlyEdit\" onclick=\"toggleChangeProfile(this)\"><ion-icon name=\"pencil-outline\"></ion-icon></td>
                    </tr>
                    <tr onclick=\"clickRow(this)\">
                        <td>MA1000</td>
                        <td>Nguyen Van A</td>
                        <td>01/01/1990</td>
                        <td>Nam</td>
                        <td>Phong nhan su</td>
                        <td>Nhan vien</td>
                        <td class=\"onlyEdit\" onclick=\"toggleChangeProfile(this)\"><ion-icon name=\"pencil-outline\"></ion-icon></td>
                    </tr>
                    <tr onclick=\"clickRow(this)\">
                        <td>MA1000</td>
                        <td>Nguyen Van A</td>
                        <td>01/01/1990</td>
                        <td>Nam</td>
                        <td>Phong nhan su</td>
                        <td>Nhan vien</td>
                        <td class=\"onlyEdit\" onclick=\"toggleChangeProfile(this)\"><ion-icon name=\"pencil-outline\"></ion-icon></td>
                    </tr>
                    <tr onclick=\"clickRow(this)\">
                        <td>MA1000</td>
                        <td>Nguyen Van A</td>
                        <td>01/01/1990</td>
                        <td>Nam</td>
                        <td>Phong nhan su</td>
                        <td>Nhan vien</td>
                        <td class=\"onlyEdit\" onclick=\"toggleChangeProfile(this)\"><ion-icon name=\"pencil-outline\"></ion-icon></td>
                    </tr>
                </tbody>
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
                <form>
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
                            <option value=\"nam\">Nam</option>
                            <option value=\"nu\">Nu</option>
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
                            <option>Nhân viên</option>
                            <option value=\"nhanvien\">Nhân viên</option>
                            <option value=\"photruong\">Phó trưởng phòngg</option>
                            <option value=\"truong\">Trưởng phòng</option>
                        </select>                                         
                    </div>
                    <div>
                        <label>Phòng ban</label>
                        <select name=\"office\">
                            <option>Phòng nhân sự</option>
                            <option value=\"maketing\">Phòng Marketing</option>
                            <option value=\"nhansu\">Phòng nhân sự</option>
                            <option value=\"ketoan\">Phòng kế toán</option>
                        </select>
                    </div>
                    <div id=\"submit\">
                        <input type=\"submit\">
                    </div>
                </form>
            </div>
        </div>
        
        <div class=\"edit\">
            <div class=\"title\">Sửa thông tin nhân viên</div>
            <div class=\"formBox\">
                <form>
                    <div>
                        <label>
                            Họ tên
                            <input type=\"text\"name=\"name\" value=\"Nguyễn Văn A\">
                        </label>
                    </div>
                    <div>
                        <label>
                            Ngày sinh
                            <input type=\"text\" name=\"dateofbirth\" value=\"01/01/1990\">
                        </label>
                    </div>
                    <div>
                        <label>Giới tính</label>
                        <select name=\"sex\" value=\"Nam\">
                            <option>Nam</option>
                            <option value=\"nam\">Nam</option>
                            <option value=\"nu\">Nữ</option>
                        </select>
                    </div>
                    <div>
                        <label>Quê quán</label>
                        <input type=\"text\" name=\"quequan\" value=\"Hà Nội\">
                    </div>
                    <div>
                        <label>
                            Chức vụ</label>
                            <select name=\"position\">
                                <option>Nhân viên</option>
                                <option value=\"nhanvien\">Nhân viên</option>
                                <option value=\"photruong\">Phó trưởng phòngg</option>
                                <option value=\"truong\">Trưởng phòng</option>
                            </select>                                        
                    </div>
                    <div>
                        <label>Phong ban</label>
                        <select name=\"office\">
                            <option>Phòng nhân sự</option>
                            <option value=\"maketing\">Phòng Marketing</option>
                            <option value=\"nhansu\">Phòng nhân sự</option>
                            <option value=\"ketoan\">Phòng kế toán</option>
                        </select>
                    </div>
                    <div class=\"btn-in-edit\">
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