<div class="sidebar">
    <div class="logo-details">
        <i class='bx bxl-c-plus-plus'></i>
        <span class="logo_name">Example Task</span>
    </div>
    <ul class="nav-links">
        <li>
            <a href="/dashboard">
                <i class='bx bx-grid-alt' ></i>
                <span class="links_name">Home</span>
            </a>
        </li>
        <li>
            <a href="#">
                <i class='bx bx-grid-alt' ></i>
                <span class="links_name">Users</span>
            </a>
        </li>
        <li>
            <a href="/tasks">
                <i class='bx bx-box' ></i>
                <span class="links_name">Tasks</span>
            </a>
        </li>
    </ul>
</div>

<style>
    /* Googlefont Poppins CDN Link */
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }
    .sidebar{
        position: fixed;
        height: 100%;
        width: 240px;
        background: #0A2558;
        transition: all 0.5s ease;
    }
    .sidebar.active{
        width: 60px;
    }
    .sidebar .logo-details{
        height: 80px;
        display: flex;
        align-items: center;
    }
    .sidebar .logo-details i{
        font-size: 28px;
        font-weight: 500;
        color: #fff;
        min-width: 60px;
        text-align: center
    }
    .sidebar .logo-details .logo_name{
        color: #fff;
        font-size: 24px;
        font-weight: 500;
    }
    .sidebar .nav-links{
        margin-top: 10px;
    }
    .sidebar .nav-links li{
        position: relative;
        list-style: none;
        height: 50px;
    }
    .sidebar .nav-links li a{
        height: 100%;
        width: 100%;
        display: flex;
        align-items: center;
        text-decoration: none;
        transition: all 0.4s ease;
    }
    .sidebar .nav-links li a.active{
        background: #081D45;
    }
    .sidebar .nav-links li a:hover{
        background: #081D45;
    }
    .sidebar .nav-links li i{
        min-width: 60px;
        text-align: center;
        font-size: 18px;
        color: #fff;
    }
    .sidebar .nav-links li a .links_name{
        color: #fff;
        font-size: 15px;
        font-weight: 400;
        white-space: nowrap;
    }
    .sidebar .nav-links .log_out{
        position: absolute;
        bottom: 0;
        width: 100%;
    }
    .home-section{
        position: relative;
        background: #f5f5f5;
        min-height: 100vh;
        width: calc(100% - 240px);
        left: 240px;
        transition: all 0.5s ease;
    }
    .sidebar.active ~ .home-section{
        width: calc(100% - 60px);
        left: 60px;
    }
    .home-section nav{
        display: flex;
        justify-content: end;
        height: 80px;
        background: #fff;
        display: flex;
        align-items: center;
        position: fixed;
        width: calc(100% - 240px);
        left: 240px;
        z-index: 100;
        padding: 0 20px;
        box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
        transition: all 0.5s ease;
    }
    .sidebar.active ~ .home-section nav{
        left: 60px;
        width: calc(100% - 60px);
    }
    .home-section nav .sidebar-button{
        display: flex;
        align-items: center;
        font-size: 24px;
        font-weight: 500;
    }
    nav .sidebar-button i{
        font-size: 35px;
        margin-right: 10px;
    }
    .home-section nav .search-box{
        position: relative;
        height: 50px;
        max-width: 550px;
        width: 100%;
        margin: 0 20px;
    }
    nav .search-box input{
        height: 100%;
        width: 100%;
        outline: none;
        background: #F5F6FA;
        border: 2px solid #EFEEF1;
        border-radius: 6px;
        font-size: 18px;
        padding: 0 15px;
    }
    nav .search-box .bx-search{
        position: absolute;
        height: 40px;
        width: 40px;
        background: #2697FF;
        right: 5px;
        top: 50%;
        transform: translateY(-50%);
        border-radius: 4px;
        line-height: 40px;
        text-align: center;
        color: #fff;
        font-size: 22px;
        transition: all 0.4 ease;
    }
    .home-section nav .profile-details{
        display: flex;
        align-items: center;
        background: #F5F6FA;
        border: 2px solid #EFEEF1;
        border-radius: 6px;
        height: 50px;
        /*min-width: 190px;*/
        padding: 0 15px 0 2px;
    }
    nav .profile-details img{
        height: 40px;
        width: 40px;
        border-radius: 6px;
        object-fit: cover;
    }
    nav .profile-details .admin_name{
        font-size: 15px;
        font-weight: 500;
        color: #333;
        margin: 0 10px;
        white-space: nowrap;
    }
    nav .profile-details i{
        font-size: 25px;
        color: #333;
    }
    .home-section .home-content{
        position: relative;
        padding-top: 104px;
    }
    .home-content .overview-boxes{
        display: flex;
        align-items: center;
        justify-content: space-between;
        flex-wrap: wrap;
        padding: 0 20px;
        margin-bottom: 26px;
    }
    .overview-boxes .box{
        display: flex;
        align-items: center;
        justify-content: center;
        width: 100%;
        background: #fff;
        padding: 15px 14px;
        border-radius: 12px;
        box-shadow: 0 5px 10px rgba(0,0,0,0.1);
    }
    .overview-boxes .box-topic{
        font-size: 20px;
        font-weight: 500;
    }
    .home-content .box .number{
        display: inline-block;
        font-size: 35px;
        margin-top: -6px;
        font-weight: 500;
    }
    .home-content .box .indicator{
        display: flex;
        align-items: center;
    }
    .home-content .box .indicator i{
        height: 20px;
        width: 20px;
        background: #8FDACB;
        line-height: 20px;
        text-align: center;
        border-radius: 50%;
        color: #fff;
        font-size: 20px;
        margin-right: 5px;
    }
    .box .indicator i.down{
        background: #e87d88;
    }
    .home-content .box .indicator .text{
        font-size: 12px;
    }
    .home-content .box .cart{
        display: inline-block;
        font-size: 32px;
        height: 50px;
        width: 50px;
        background: #cce5ff;
        line-height: 50px;
        text-align: center;
        color: #66b0ff;
        border-radius: 12px;
        margin: -15px 0 0 6px;
    }
    .home-content .box .cart.two{
        color: #2BD47D;
        background: #C0F2D8;
    }
    .home-content .box .cart.three{
        color: #ffc233;
        background: #ffe8b3;
    }
    .home-content .box .cart.four{
        color: #e05260;
        background: #f7d4d7;
    }
    .home-content .total-order{
        font-size: 20px;
        font-weight: 500;
    }
    .home-content .sales-boxes{
        display: flex;
        justify-content: space-between;
        /* padding: 0 20px; */
    }

    /* left box */
    .home-content .sales-boxes .recent-sales{
        width: 65%;
        background: #fff;
        padding: 20px 30px;
        margin: 0 20px;
        border-radius: 12px;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
    }
    .home-content .sales-boxes .sales-details{
        display: flex;
        align-items: center;
        justify-content: space-between;
    }
    .sales-boxes .box .title{
        font-size: 24px;
        font-weight: 500;
        /* margin-bottom: 10px; */
    }
    .sales-boxes .sales-details li.topic{
        font-size: 20px;
        font-weight: 500;
    }
    .sales-boxes .sales-details li{
        list-style: none;
        margin: 8px 0;
    }
    .sales-boxes .sales-details li a{
        font-size: 18px;
        color: #333;
        font-size: 400;
        text-decoration: none;
    }
    .sales-boxes .box .button{
        width: 100%;
        display: flex;
        justify-content: flex-end;
    }
    .sales-boxes .box .button a{
        color: #fff;
        background: #0A2558;
        padding: 4px 12px;
        font-size: 15px;
        font-weight: 400;
        border-radius: 4px;
        text-decoration: none;
        transition: all 0.3s ease;
    }
    .sales-boxes .box .button a:hover{
        background:  #0d3073;
    }

    /* Right box */
    .home-content .sales-boxes .top-sales{
        width: 35%;
        background: #fff;
        padding: 20px 30px;
        margin: 0 20px 0 0;
        border-radius: 12px;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
    }
    .sales-boxes .top-sales li{
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin: 10px 0;
    }
    .sales-boxes .top-sales li a img{
        height: 40px;
        width: 40px;
        object-fit: cover;
        border-radius: 12px;
        margin-right: 10px;
        background: #333;
    }
    .sales-boxes .top-sales li a{
        display: flex;
        align-items: center;
        text-decoration: none;
    }
    .sales-boxes .top-sales li .product,
    .price{
        font-size: 17px;
        font-weight: 400;
        color: #333;
    }
    table {
        border: none;
        font-size: 16px;
        height: 270px;
        width: 80%;
    }
</style>
