<?php 
    

    class Row {
        public $id = 0;
        public $stt = 0;
        public $img = "";
        public $ten = "";
        public $count = 0;
        public $price = 0;
        public $sum = 0;
        public $isPick = true;

        function __construct($id, $stt, $img, $ten, $count, $price, $sum, $isPick) {
            $this->id = $id;
            $this->stt = $stt;
            $this->img = $img;
            $this->ten = $ten;
            $this->count = $count;
            $this->price = $price;
            $this->sum = $sum;
            $this->isPick = $isPick;
        }

        function toStr() : String {
            return 
            "
            <tr id='row-cart-$this->id' class='row-product' data-id='$this->id' data-cnt='$this->count' data-price='$this->price'>
                <td><input class='form-check-input cb-check' type='checkbox' checked='$this->isPick' data-id='$this->id'/> </td>
                <td><img src='$this->img' class='avatar'/></td>
                <td>$this->ten</td>
                <td><input class='form-control inp-cnt' type='number' value='$this->count' data-id='$this->id' min='1'/></td>
                <td>$this->price</td>
                <td>$this->sum</td>
                <td><button class='btn btn-danger btn-delete-product-cart' data-id='$this->id'><i class='bi bi-trash'></i></button></td>
            </tr>
            ";
        }
    }
    $temImg = "https://shopgiayreplica.com/wp-content/uploads/2023/08/JORDAN-1-RETRO-HIGH-OG-SP-UNION-LA-BEPHIES-BEAUTY-SUPPLY-THE-SUMMER-OF-%E2%80%9896.jpg";
   

    $ID_USER = 0;

    $a=array();
    $a1=array(1,5,6,9,7,5,6);
    $a2=array(111,58966,6541,9544,75765,554564,6554);
    $SUM = 0;
    for ($x = 1; $x <= 10; $x++) {
        $cnt = $a1[$x % count($a1)];
        $pri = $a2[$x % count($a2)];
        $sum = $cnt * $pri;
        $SUM += $sum;
        array_push($a, new Row($x, $x, $temImg, "Nike", $cnt, $pri, $sum, true));
    }
?>


<div class="container">
    <h1>Giỏ hàng</h1>
    <table class="table table-hover">
        <tr>
            <th>Chọn</th>
            <th>Ảnh đại diện</th>
            <th>Tên sản phẩm</th>
            <th>Số lượng</th>
            <th>Giá</th>
            <th>Thành tiền</th>
            <th>Hành động</th>
        </tr>
        <?php 
            for ($x = 0; $x < count($a); $x++) {
                echo $a[$x]->toStr();
            }
        ?>
    </table>

    <div class='row'>
        <div class='col-10'><h2 id="thanhTien"> Thành tiền: <?= $SUM?> VND</h2></div>
        <div class='col-2'><button class='btn btn-primary' id='btn-thanh-toan'>Thanh toán <i class="bi bi-credit-card"></i></button></div>
    </div>
</div>

<script>
var thanhTien = document.getElementById("thanhTien")

var listCb = document.getElementsByClassName("cb-check")
var listBtnDelete = document.getElementsByClassName("btn-delete-product-cart")
var listInpCnt =  document.getElementsByClassName("inp-cnt")
var row = document.getElementsByClassName("row-product")

var mapProduct = {}

for(var i =0;i< row.length;i++) {
    const e = row[i]

    var ele = {
        id: e.dataset.id,
        cnt: e.dataset.cnt,
        price: e.dataset.price,
        check: true
    }
    mapProduct[ele.id] = ele
    
}

for(var i =0;i< listCb.length;i++) {
    const e = listCb[i]
    
    e.addEventListener('change', (event) => {
        var product = mapProduct[e.dataset.id]
        product.check = !product.check
        update()
    })
}


for(var i =0;i< listBtnDelete.length;i++) {
    const e = listBtnDelete[i]
 
    e.addEventListener('click', (event) => {
        var product = mapProduct[e.dataset.id]
        product.check = false
        var id = "#row-cart-"+product.id
        $(id).hide()
        update()
    })
}

for(var i =0;i< listInpCnt.length;i++) {
    const e = listInpCnt[i]

    e.addEventListener('change', (event) => {
        var product = mapProduct[e.dataset.id]
        product.cnt = Number(e.value)
        update()
    })
}

function calc() {
    sum = 0;
    for (let key of Object.keys(mapProduct)) {
        const value = mapProduct[key];
        if(value.check) {
            sum += value.cnt * value.price
        }
    }
    return sum
}

var btnThanhToan = document.getElementById("btn-thanh-toan")
function update() {
    
    sum = calc();

    if(sum == 0) {
        btnThanhToan.disabled =true
    } else {
        btnThanhToan.disabled =false
    }
    
    thanhTien.innerHTML = "Thành tiền: " + sum
}



btnThanhToan.addEventListener('click', (event) => {
    console.log("sản phẩm cần thanh toán: ")
    console.log(mapProduct)
    console.log(thanhTien.innerHTML)

    alert("Bạn sẽ chuyển sang trang thanh toán!")
})

</script>