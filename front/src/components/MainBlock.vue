<template>
    <h2 class="title">Ultra-1.0-00.00.00 Кресло-коляска с электроприводом</h2>
    <div class="btns-block">
        <div class="left-block">
            <button class="left-block-btn b1">Отменить</button>
            <button class="left-block-btn b2">Сохранить</button>
        </div>
        <div class="right-block">
            <button class="right-block-btn br1">
                <img src="../assets/img/list.png">
            </button>
            <button class="right-block-btn br2">
                <img src="../assets/img/trash.png">
            </button>
        </div>
    </div>
</template>
<style scoped>

.title{
    font-family: 'GilroyR';
    font-size: 24px;
    font-weight: 400;
    line-height: 28.8px;
    text-align: left;
    margin: 26px 0 24px;
}
.btns-block{
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.left-block-btn{
    padding: 16px;
    border-radius: 4px;
    font-family: 'GilroyB';
    font-size: 14px;
    font-weight: 700;
    line-height: 17.33px;
    box-sizing: border-box;
    border: none;
    cursor: pointer;
}

.b1{
    border: 1px solid #BEBEBE;
    background-color: rgba(0, 0, 0, 0);
    margin-right: 32px;
}

.b2{
    color: #F8FAFC;
    background: #7843E9;
}

.right-block{
    display: flex;
}

.right-block-btn{
    width: 40px;
    height: 40px;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 4px;
    border: none;
    cursor: pointer;
}

.br1{
    background: #E12D2C;
    margin-right: 24px;
}

.br2{
    background: #1E1F43;
}

</style>