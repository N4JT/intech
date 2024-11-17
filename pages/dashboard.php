


<?php
include "./components/head.php";
include './../functions/utils/getUser.php';
include "./../functions/database/loadData.php";

?>

<?php
include './components/menu.php';
?>
<div class="content">
    <h1 class=nadpis>
        DASHBOARD
    </h1>


<script>
     const handleEdit = (id) => {
        window.location.href = `./edit.php?order_id=${id}`;
    };

    const handleRemove = (id) => {
        window.location.href = `./remove.php?order_id=${id}`;
    }
    const handleAddNew = () => { 
        window.location.href = "./add.php";
    }
    const handleSort = () => { 
        const url = new URL(window.location.href);
        const data = new URLSearchParams(url.search);
        try{
            const param = Number(data.get("sort"));
            if(param){
                window.location.href = `./dashboard.php?sort=${+!param}`;

            }else{
                window.location.href=`./dashboard.php?sort=1`;
            }   
               
            }catch(Exception){
                window.location.href=`./dashboard.php`;
            }
       
        
    }
    </script>
    
<div class="data-container">
   <div class="data-content"><div class="full" onCLick="handleSort()"><div class="date-title">DATUM</div><div id="date-icon"><span class=<?php echo $sort === "ASC" ?  "fa6-solid--arrow-up" : "fa6-solid--arrow-down" ?>></span></div> </div><div>TITLE</div><div class="data-icons"></div></div>
<div class="whole">


<?php
foreach ($orders as $order) {
    echo "<div class=data-content><div class=full>" . htmlspecialchars($order['date']) . "</div> <div>" . htmlspecialchars($order['title']) . "</div><div class=data-icons><span class=material-symbols--edit onClick=handleEdit(".htmlspecialchars($order['order_id']) .")></span> <span class=pajamas--remove onClick=handleRemove(".htmlspecialchars($order['order_id']) .")></span></div></div>";
    echo "<div class=line></div>";
}

?>
</div>
<div class="data-content-button" onClick="handleAddNew()">
<span class="mdi--add"></span>
</div>  
</div>
</div>

</body>


