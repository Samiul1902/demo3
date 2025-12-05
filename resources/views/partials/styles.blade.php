<style>
    /* 1. Variables & Reset */
    :root {
        --primary: #d63384; /* Hot Pink */
        --primary-hover: #a82062;
        --dark: #212529;
        --light: #f8f9fa;
        --gray: #6c757d;
        --white: #ffffff;
    }
    body {
        margin: 0;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-color: var(--light);
        display: flex;
        flex-direction: column;
        min-height: 100vh; /* Keeps footer at bottom */
        color: var(--dark);
    }
    a { text-decoration: none; color: inherit; transition: 0.3s; }
    ul { list-style: none; margin: 0; padding: 0; }

    /* 2. Layout Utilities */
    .container {
        max-width: 1100px;
        margin: 0 auto;
        padding: 0 20px;
    }
    .text-center { text-align: center; }
    .mt-4 { margin-top: 1.5rem; }
    .mb-5 { margin-bottom: 3rem; }

    /* 3. Navbar Styling */
    .main-nav {
        background: var(--white);
        box-shadow: 0 2px 15px rgba(0,0,0,0.05);
        position: sticky;
        top: 0;
        z-index: 100;
        padding: 15px 0;
    }
    .nav-container {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    .nav-brand {
        font-size: 1.5rem;
        font-weight: bold;
        color: var(--primary);
    }
    .nav-menu {
        display: flex;
        gap: 25px;
        align-items: center;
    }
    .nav-link:hover { color: var(--primary); }

    /* 4. Button Styling */
    .btn {
        display: inline-block;
        padding: 10px 25px;
        border-radius: 50px;
        font-weight: 600;
        cursor: pointer;
        border: 2px solid transparent;
    }
    .btn-primary {
        background-color: var(--primary);
        color: var(--white);
    }
    .btn-primary:hover { background-color: var(--primary-hover); }
    .btn-outline {
        border-color: var(--dark);
        color: var(--dark);
        background: transparent;
    }
    .btn-outline:hover {
        background: var(--dark);
        color: var(--white);
    }

    /* 5. Hero & Cards */
    .hero {
        background: linear-gradient(135deg, #fff0f6 0%, #ebedee 100%);
        padding: 80px 0;
        text-align: center;
    }
    .hero h1 { font-size: 3rem; margin-bottom: 10px; }
    .hero p { font-size: 1.2rem; color: var(--gray); margin-bottom: 30px; }

    .features-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 30px;
        margin-top: 50px;
    }
    .feature-card {
        background: var(--white);
        padding: 30px;
        border-radius: 15px;
        box-shadow: 0 5px 20px rgba(0,0,0,0.05);
        text-align: center;
        transition: transform 0.3s ease;
    }
    .feature-card:hover { transform: translateY(-5px); }
    .feature-icon { font-size: 3rem; margin-bottom: 15px; display: block; }

    /* 6. Footer */
    .main-footer {
        background: var(--dark);
        color: var(--white);
        text-align: center;
        padding: 20px 0;
        margin-top: auto;
    }

    /* 7. Form Styling */
    .auth-card {
        max-width: 400px;
        margin: 50px auto;
        background: var(--white);
        padding: 40px;
        border-radius: 15px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.05);
    }
    .form-group { margin-bottom: 20px; }
    .form-label {
        display: block;
        margin-bottom: 8px;
        font-weight: 600;
        color: var(--dark);
    }
    .form-control {
        width: 100%;
        padding: 12px 15px;
        border: 2px solid #e9ecef;
        border-radius: 8px;
        font-size: 1rem;
        transition: 0.3s;
        box-sizing: border-box; /* Fixes width issues */
    }
    .form-control:focus {
        border-color: var(--primary);
        outline: none;
    }
    .text-danger { color: #dc3545; font-size: 0.875rem; margin-top: 5px; display: block; }
    .auth-title { text-align: center; margin-bottom: 30px; color: var(--primary); }

</style>