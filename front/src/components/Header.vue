<template>
  <div class="header">
    <div class="flex">
      <div class="left">
        <a class="chapter-link" href="#">Наменклатура</a>
        <a class="chapter-link" href="#">Производство</a>
        <a class="chapter-link" href="#">Зарплата</a>
      </div>
      
      <button class="header-btn">
        Выйти
        <img src="../assets/img/logout.png">
      </button>

    </div>
  </div>
</template>

<style scoped>
.header{
  background: #1B263C;
  height: 45px;
}

.header-btn{
  color: #EFEFEF;
  font-family: 'GilroyR';
  font-size: 14px;
  font-weight: 400;
  line-height: 16.8px;
  gap: 4px;
  display: flex;
  align-items: center;
  background-color: rgba(0, 0, 0, 0);
  border: none;
  cursor: pointer;
}

.flex{
  display: flex;
  align-items: center;
  justify-content: space-between;
  height: 100%;
  padding: 0 4px;
}

.chapter-link{
  font-family: 'GilroyR';
  font-size: 14px;
  font-weight: 400;
  line-height: 16.8px;
  text-align: left;
  color: #F8FAFC;
  padding: 8px 4px;
  border-radius: 4px;
  transition: all ease 0.3s;
  cursor: pointer;
  text-decoration: none; 
}

.chapter-link:hover{
  background-color: #F8FAFC;
  color: #000;
}

</style>