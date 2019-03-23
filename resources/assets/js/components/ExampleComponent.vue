<template>
<div>
<el-row>
  <el-col :span="16"><div class="grid-content bg-purple">
    <div class="line"></div>
    <el-menu
      :default-active="activeIndex2"
      class="el-menu-demo"
      mode="horizontal"
      @select="handleSelect"
      background-color="#409EFF"
      text-color="#fff"
      active-text-color="#ffd04b">
      <el-menu-item index="1">处理中心</el-menu-item>
      <el-submenu index="2">
         <template slot="title">我的工作台</template>
         <el-menu-item index="2-1">选项1</el-menu-item>
         <el-menu-item index="2-2">选项2</el-menu-item>
         <el-menu-item index="2-3">选项3</el-menu-item>
      <el-submenu index="2-4">
      <template slot="title">选项4</template>
      <el-menu-item index="2-4-1">选项1</el-menu-item>
      <el-menu-item index="2-4-2">选项2</el-menu-item>
      <el-menu-item index="2-4-3">选项3</el-menu-item>
    </el-submenu>
  </el-submenu>
  <el-menu-item class="float-right" index="3" disabled>消息中心</el-menu-item>
  <el-menu-item class="float-right" index="4"><a href="https://www.ele.me" target="_blank">订单管理</a></el-menu-item>
</el-menu>
  </div></el-col>
  <el-col :span="8"><div class="grid-content bg-purple">
  <el-menu 
      :default-active="activeIndex2"
      class="el-menu-demo"
      mode="horizontal"
      @select="handleSelect"
      background-color="#409EFF"
      text-color="#fff"
      active-text-color="#ffd04b">
  <el-menu-item class="float-right" index="4"><a href="https://www.ele.me" target="_blank">订单管理</a></el-menu-item>

  <el-form :inline="true" :model="formInline" class="demo-form-inline">
  <el-form-item>
    <el-select v-model="formInline.region" placeholder="搜索">
      <el-option label="区域二" value="beijing"></el-option>
    </el-select>
  </el-form-item>
  <el-form-item>
    <el-button type="success" @click="onSubmit">查询</el-button>
  </el-form-item>
</el-form>
  </el-menu>
  </div></el-col>
</el-row>
</div>
</template>

<style>
.float-right{
    float:right;
}
</style>

<script>
  export default {
    data() {
      return {
        activeIndex: '1',
        activeIndex2: '1',
        formInline: {
          user: '',
          region: ''
        }
      };
    },
    methods: {
      handleSelect(key, keyPath) {
        console.log(key, keyPath);
      }
    }
  }
</script>
