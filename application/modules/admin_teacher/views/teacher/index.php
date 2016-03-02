<section class="itq-view">
    <section class="advanced">
        <section class="search">
            <form method="get" action="<?php echo site_url('backend_article/post/index');?>">
                <input type="text" name="keyword" class="text" value="<?php echo (isset($keyword) && !empty($keyword))?htmlspecialchars($keyword):'';?>"/>
                <?php echo form_dropdown('catalogueid', $dropdown_catalogueid, set_value('catalogueid', $catalogueid), ' class="cbSelect"');?>
                <input type="submit" class="submit" value="Tìm kiếm" />
            </form>
        </section><!-- .search -->
        <section class="tool">
            <form method="post" action="">
                <input type="button" value="Xóa nhiều" onclick="if(confirm('Are you sure?')){document.getElementById('btnDelete').click()}" />
                <input type="button" value="Sắp xếp" onclick="document.getElementById('btnSort').click(); return false;" />
            </form>
        </section><!-- .tool -->
    </section class="main"><!-- .advanced -->
        <table class="table table-bordered table-hover">
        <thead>
          <tr>
            <th>#</th>
            <th>MSGV</th>
            <th>Họ đệm</th>
            <th>Tên</th>
            <th>Ngày sinh</th>
            <th>Hộ khẩu</th>
            <th>Khoa</th>
            <th>Thao tác</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><input type="checkbox" name="check[id]" value="1" class="check-all" /></td>
            <td>20122163</td>
            <td>Nguyễn Đức</td>
            <td>Ngọc</td>
            <td>28/05/1994</td>
            <td>TP Vinh,Tỉnh Nghệ An</td>
            <td>CNTT</td>
            <td><a href=""><img src="template/backend/default/images/delete.png" /></a><a href=""><img src="template/backend/default/images/edit.png" /></a></td>
          </tr>
        </tbody>
      </table>
  </section>
</section>