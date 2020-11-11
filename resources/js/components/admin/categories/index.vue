<template>
    <el-table
    :data="categories"
    style="width: 100%"
   >
    <el-table-column
      label="id"
      width="180" prop="id">
     
    </el-table-column>
    <el-table-column
      label="image"
      width="180">
      <template slot-scope="scope">
        <span style="margin-left: 10px">{{ scope.row.image }}</span>
      </template>
    </el-table-column>
    <el-table-column
      label="Name"
      width="180">
      <template slot-scope="scope">
        <el-popover trigger="hover" placement="top">
          <p> {{ scope.row.name }}</p>
              <div slot="reference" class="name-wrapper">
            <el-tag size="medium">{{ scope.row.name }}</el-tag>
          </div>
        </el-popover>
      </template>
    </el-table-column>
    <el-table-column
      label="name"
      width="250">
      <template slot-scope="scope">
        <i class="el-icon-time"></i>
        <span style="margin-left: 10px">{{ scope.row.created_at }}</span>
      </template>
    </el-table-column>
    <el-table-column
      label="Operations">
      <template slot-scope="scope">
        <el-button
          size="mini"
          @click="">Edit</el-button>
        <el-button
          size="mini"
          type="danger"
          @click="">Delete</el-button>
      </template>
    </el-table-column>
  </el-table>
</template>

<script>
import Vue from 'vue'
import Element from 'element-ui'
Vue.use(Element)

export default {
        data(){
            return{
                categories: []
            }
        },

        created(){
            this.getCategories();
        },

         methods:{
            // lấy dữ liệu từ api
            getCategories(){
                axios.get(`/api/categories`).then((res)=>{
                if(res.status === 200){
                    this.categories = res.data.data;
                }
            }).catch((err) =>{
                })
            },

        }
}
</script>
<style lang="sass" scoped>
    
</style>