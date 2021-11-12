<?=
    "<div class=\"salary\">
    <div class=\"salary-level listBox\">
        <div>
        <div class=\"table-title\">Mức lương hiện có</div>
        <table>
            <thead>
                <tr>
                    <td>Mã lương</th>
                    <td>Phòng ban</th>
                    <td>Chức vụ</th>
                    <td>Mức lương một ngày</td>
                    <td>Mức tiền thưởng</td>
                    <td>Chỉnh sửa</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>MA1000</td>
                    <td>Phòng nhân sự</td>
                    <td>Nhân viên</td>
                    <td>1 triệu</td> 
                    <td>2 triệu</td>
                    <td class=\"onlyEdit\" onclick=\"editSalary(this)\"><ion-icon name=\"pencil-outline\"></ion-icon></td>
                </tr>        
            </tbody>
        </table>
        <div class=\"btnBox\">
            <div class=\"btn\">
                <div class=\"pre-btn\">
                    <a href=\"#\"><ion-icon name=\"chevron-back-outline\"></ion-icon> Truoc</a>
                </div>
                <div class=\"next-btn\">
                    <a href=\"#\">Sau <ion-icon name=\"chevron-forward-outline\"></ion-icon></a>
                </div>
            </div>
        </div>
        </div>
    </div>
        <div class=\"edit editSalary\">
            <div class=\"title\">Sửa mức lương</div>
            <div class=\"formBox\">
                <form>
                    <div>
                        <label>
                            Mã lương
                            <input type=\"text\"name=\"name\" value=\"MA1000\">
                        </label>
                    </div>
                    <div>
                        <label>Phong ban</label>
                        <select name=\"office\">
                            <option>Phòng nhân sự</option>
                        <option value=\"maketing\">Phong Marketing</option>
                            <option value=\"nhansu\">Phong nhan su</option>
                            <option value=\"ketoan\">Phong ke toan</option>
                        </select>
                    </div>
                    <div>
                        <label>
                            Chuc vu</label>
                            <select name=\"position\">
                                <option>Nhân viên</option>
                                <option value=\"nhanvien\">Nhan vien</option>
                                <option value=\"photruong\">Pho truong phong</option>
                                <option value=\"truong\">Truong phong</option>
                            </select>                                        
                    </div>
    
                    <div class=\"btn-in-edit\">
                        <div id=\"submit\">
                            <input type=\"submit\">
                        </div>
                    </div>
                </form>
            </div>
            
        </div>
    </div>
</div>"
?>