<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <title>Document</title>
    <style>
.alert-card {
  position: relative;
  display: flex;
  align-items: center;
  width: 100%;
  padding: 20px;
  background-color: var(--bs-success);
  color: var(--bs-light);
  border: 1px solid #f5c6cb;
  border-radius: 4px;
}

.close-btn {
  position: absolute;
  top: 5px;
  right: 5px;
  cursor: pointer;
}

.message {
  font-size: 18px;
}
@keyframes slideIn {
  from {
    transform: translateY(-100%);
  }
  to {
    transform: translateY(0);
  }
}

.alert-card {
  animation: slideIn 0.5s;
}
@keyframes slideOut {
  from {
    transform: translateY(0);
    opacity: 1;
  }
  to {
    transform: translateY(-100%);
    opacity: 0;
  }
}
    </style>
</head>
<body>
    <div class="alert-card">
        <span class="close-btn">&times;</span>
        <div class="message text-cente">This is an alert message!</div>
    </div>



    <script>
const closeBtn = document.querySelector('.close-btn');
const alertCard = document.querySelector('.alert-card');

closeBtn.addEventListener('click', () => {
  alertCard.style.animation = 'slideOut 0.5s';
  setTimeout(() => {
    alertCard.style.display = 'none';
  }, 500);
});
    </script>
</body>
</html>