document.addEventListener("DOMContentLoaded", function () {
    var savedData = JSON.parse(localStorage.getItem("danhSachSanPham")) || [];
    
    loadList(savedData);

});

function elementProduct(product){
    const element = document.createElement("div");
    element.innerHTML = `
    <img src="">
    <h4 class="h4den">${product.tensp}</br></h4>
    <span class="spanden">${product.gia}</span>
    <button onclick="MuaHang()" type="submit" style="background-color: black; color: #fff; font-weight: bold; border-radius: 5px;float: right;">Đặt hàng ngay</button>
    `;
    return element;
   
}
function loadList(dssp){
    const list = document.querySelector("#sanpham-list");
    for (let index = 0; index < dssp.length; index++) {
        const product = dssp[index];
        list.appendChild(elementProduct(product));
    }
}
function MuaHang() {
    window.location.href = "DatHang.html";
    alert("Đặt Hàng Thành Công");
}

