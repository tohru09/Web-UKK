<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Inventaris Apotek</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    
    <style>
    :root {
        --grad-start: #00c6ff;
        --grad-end: #0072ff;
    }

    body {
        font-family: 'Poppins', sans-serif;
        background: linear-gradient(135deg, var(--grad-start) 0%, var(--grad-end) 100%);
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 100vh;
        margin: 0;
        position: relative;
        overflow: hidden;
    }

    body::before, body::after {
        content: "";
        position: absolute;
        width: 300px;
        height: 300px;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.1);
        z-index: -1;
    }
    body::before { top: -100px; left: -100px; }
    body::after { bottom: -100px; right: -100px; }

    .login-card {
        width: 100%;
        max-width: 400px;
        background: rgba(255, 255, 255, 0.95);
        backdrop-filter: blur(10px);
        border-radius: 25px;
        box-shadow: 0 20px 40px rgba(0,0,0,0.2);
        padding: 40px 30px;
        position: relative;
        margin-top: 50px;
        border: 1px solid rgba(255, 255, 255, 0.3);
    }

    .profile-img {
        width: 115px;
        height: 115px;
        background: #fff;
        border-radius: 50%;
        position: absolute;
        top: -57px;
        left: 50%;
        transform: translateX(-50%);
        padding: 5px;
        box-shadow: 0 10px 20px rgba(0,0,0,0.1);
    }

    .profile-img img {
        width: 100%;
        height: 100%;
        border-radius: 50%;
        object-fit: cover;
    }

    .header-text {
        margin-top: 55px;
        margin-bottom: 30px;
        text-align: center;
    }

    .header-text h4 {
        font-weight: 700;
        color: #333;
        margin-bottom: 5px;
        letter-spacing: 1px;
    }

    .header-text p {
        font-size: 0.85rem;
        color: #666;
    }

    .btn-login {
        border-radius: 12px;
        padding: 14px;
        font-weight: 600;
        background: linear-gradient(to right, var(--grad-start), var(--grad-end));
        border: none;
        color: white;
        transition: all 0.3s ease;
        box-shadow: 0 10px 20px rgba(0, 114, 255, 0.2);
    }

    .btn-login:hover {
        transform: translateY(-2px);
        box-shadow: 0 15px 25px rgba(0, 114, 255, 0.4);
        color: white;
    }

    .input-group-text {
        background: #f8f9fa;
        color: var(--grad-end);
        border-right: none;
    }

    .form-control {
        background: #f8f9fa;
        border-left: none;
    }

    .form-control:focus {
        box-shadow: none;
        border-color: #dee2e6;
        background: #fff;
    }
    </style>
</head>
<body>

<div class="login-card">
    <div class="profile-img">
        <img src="<?= base_url('assets/img/wildan.jpg') ?>" alt="User">
    </div>

    <div class="header-text">
        <h4>LOGIN SISTEM</h4>
        <p>Aplikasi Inventaris Apotek</p>
    </div>

    <?php if($this->session->flashdata('gagal')): ?>
        <div class="alert alert-danger fade show py-2 mb-4" role="alert" style="font-size: 0.85rem;">
            <i class="fas fa-exclamation-triangle me-2"></i> 
            <?= $this->session->flashdata('gagal'); ?>
        </div>
    <?php endif; ?>

    <form action="<?= base_url('auth/proses_login') ?>" method="post">
        <div class="mb-3">
            <label class="form-label" style="font-size: 0.8rem; font-weight: 600;">Username</label>
            <div class="input-group">
                <span class="input-group-text"><i class="fas fa-user"></i></span>
                <input type="text" name="username" class="form-control" placeholder="Username" required autofocus>
            </div>
        </div>

        <div class="mb-4">
            <label class="form-label" style="font-size: 0.8rem; font-weight: 600;">Password</label>
            <div class="input-group">
                <span class="input-group-text"><i class="fas fa-lock"></i></span>
                <input type="password" name="password" class="form-control" placeholder="Password" required>
            </div>
        </div>

        <button type="submit" class="btn btn-primary btn-login w-100">
            MASUK <i class="fas fa-arrow-right ms-2"></i>
        </button>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        window.setTimeout(function() {
            $(".alert").fadeTo(500, 0).slideUp(500, function(){
                $(this).remove(); 
            });
        }, 3000);
    });
</script>
</body>
</html>