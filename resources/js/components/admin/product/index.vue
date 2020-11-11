<template>
    <el-table
    :data="products"
    style="width: 100%"
    v-loading="loading">
    <el-table-column
      label="id"
      width="180" prop="id">
     
    </el-table-column>

    <el-table-column
      label="Date"
      width="180">
      <template slot-scope="scope">
        <i class="el-icon-time"></i>
        <span style="margin-left: 10px">{{ scope.row.date }}</span>
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
                loading: false,
                products: [
                    {
                        id: 1,
                        name: 'sản phẩm 1',
                    },
                     {
                        id: 2,
                        name: 'sản phẩm 1',
                    },
                     {
                        id: 3,
                        name: 'sản phẩm 1',
                    }
                ]
            }
        },
        created(){
            this.loading = true;
            this.loading = false;
        }
}
</script>
<style lang="sass" scoped>
    
</style>