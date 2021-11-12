<?=
    "<div class=\"ket-qua-tim-kiem\">
    <div class=\"listBox\">
        <div class=\"table-title\">Kết quả tìm kiếm</div>
        <table>
            <thead>
                <tr>
                    <td>Mã nhân viên</td>
                    <td>Họ tên</td>
                    <td>Ngày sinh</td>
                    <td>Gioi tinh</td>
                    <td>Phòng ban</td>
                    <td>Chức vụ</td>
                    <td>Khác</td>
                </tr>
            </thead>
            <tbody>
                <tr onclick=\"clickRow(this)\">
                    <td>MA1000</td>
                    <td>Nguyen Van A</td>
                    <td>01/01/1990</td>
                    <td>Nam</td>
                    <td>Phòng nhân sự</td>
                    <td>Nhân viên</td>
                    <td><a href=\"Nhatkylamviec\" class=\"button\">Xem nhật ký làm việc</a></td>
                </tr>        
            </tbody>
        </table>
        <div class=\"btnBox\">
            <div class=\"btn\">
                <div class=\"thanhtoan-btn\">
                    <a onclick=\"popup()\" href=\"#\">Thanh toán lương $</a>
                </div>
                <div class=\"pre-btn\">
                    <a href=\"#\"><ion-icon name=\"chevron-back-outline\"></ion-icon> Trước</a>
                </div>
                <div class=\"next-btn\">
                    <a href=\"#\">Sau <ion-icon name=\"chevron-forward-outline\"></ion-icon></a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
        <div class=\"pop-up\">
            <div class=\"pop-up-content\">
                <div>
                    <h4>Tổng mức lương cần trả là: <span>1 tỷ</span></h4>
                </div>
                <div>Bạn có chắc muốn thanh toán?</div>
                <div>
                    <button onclick=\"popup()\" id=\"yes\">Chắc chắn</button>
                    <button onclick=\"popup()\" id=\"no\">Hủy</button>
                </div>
            </div>
        </div>"
?>