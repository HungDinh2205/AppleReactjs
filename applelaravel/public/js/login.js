// function login() {
//     var username = document.getElementById('username').value;
//     var password = document.getElementById('password').value;

//     // Kiểm tra điều kiện đăng nhập ở đây (có thể sử dụng local storage)

//     // Ví dụ đơn giản: nếu username và password đều là "admin", cho phép đăng nhập
//     if (username === 'admin' && password === '1') {
//       localStorage.setItem("isLoggedIn", "true");
//       localStorage.setItem("username", username);
//       alert('Đăng nhập thành công!');
//       // Thực hiện các hành động cần thiết sau khi đăng nhập thành công
//       window.location.href = "Quantri1.html"
//     } else {
//         alert('Đăng nhập thất bại. Vui lòng kiểm tra lại thông tin đăng nhập.');
//     }
// }