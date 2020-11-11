<template>
  <el-col class="flex-card">
    <el-card class="border-card"   :body-style="{ padding: '0px' }">
      <img src="upload/dt.jpg" class="image">
      <div class="span" style="padding: 14px;">
        <a  href="#">Yummy hamburger</a>
        <div class="sag_no_gia">
            <span class="no_gia">5.100.000đ</span>
        </div>
        <div class="bottom clearfix">
          <el-button type="text" class="button">123</el-button>
        </div>
      </div>
    </el-card>
       <el-card class="border-card"  :body-style="{ padding: '0px' }">
      <img src="upload/dt.jpg" class="image">
      <div class="span" style="padding: 14px;">
        <a href="#">Yummy hamburger</a>
         <div class="sag_no_gia">
            <span class="no_gia">5.100.000đ</span>
        </div>
        <div class="bottom clearfix">
          <el-button type="text" class="button">123</el-button>
        </div>
      </div>
    </el-card>
       <el-card  class="border-card" :body-style="{ padding: '0px' }">
      <img src="upload/dt.jpg" class="image">
      <div class="span" style="padding: 14px;">
        <a href="#">Yummy hamburger</a>
         <div class="sag_no_gia">
            <span class="no_gia">5.100.000đ</span>
        </div>
        <div class="bottom clearfix">
          <el-button type="text" class="button">123</el-button>
        </div>
      </div>
    </el-card>
       <el-card  class="border-card" :body-style="{ padding: '0px' }">
      <img src="upload/dt.jpg" class="image">
      <div class="span" style="padding: 14px;">
        <a  href="#">Yummy hamburger</a>
         <div class="sag_no_gia">
            <span class="no_gia">5.100.000đ</span>
        </div>
        <div class="bottom clearfix">
          <el-button type="text" class="button">123</el-button>
        </div>
      </div>
    </el-card>
  </el-col>
</template>
<script>
export default {
    
}
</script>
<style >
      .time {
    font-size: 13px;
    color: #999;
  }
  
  .bottom {
    margin-top: 13px;
    line-height: 12px;
  }

  .button {
    padding: 0;
    float: right;
  }

  .image {
    width: 100%;
    display: block;
  }

  .clearfix:before,
  .clearfix:after {
      display: table;
      content: "";
  }
  
  .clearfix:after {
      clear: both
  }
  .border-card{
      border: solid 1px #ebebeb;
      margin-left: 0.5em;
    
  }
  .flex-card{
      display: flex;
      
  }
  .span{
          font-family: "Roboto", sans-serif;
    font-size: 14px;
    font-weight: 400;
    margin: 0 0 5px;
    line-height: 24px;
    text-overflow: ellipsis;
    overflow: hidden;
    white-space: nowrap;
  }
  .span a{
       color: #555;
    text-decoration: none;
  }
  .span a:hover{
        color: #167edf;
    text-decoration: none;
  }
</style>