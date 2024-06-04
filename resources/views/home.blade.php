@extends('layouts/app', ['title' => 'Category List'])

@push('head')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <style>
        .section {
            padding: 60px 0;
            color: #343a40;
            text-align: center;
        }

        .section:nth-child(odd) {
            background-color: #f8f9fa;
            /* Light gray */
        }

        .section:nth-child(even) {
            background-color: #e9ecef;
            /* Slightly darker gray */
        }

        .icon {
            font-size: 3rem;
            margin-bottom: 20px;
            color: #007bff;
            /* Bootstrap primary color */
        }

        .btn-light {
            background-color: #007bff;
            color: white;
            border: none;
        }

        .btn-light:hover {
            background-color: #0056b3;
        }

        .text-white {
            color: #007bff !important;
        }
    </style>
@endpush

@section('content')
    <div class="section">
        <div class="container">
            <h1>Welcome to Expense Manager</h1>
            <p>Track and manage your expenses effortlessly.</p>
            <a href="#" class="btn btn-light btn-lg">Get Started</a>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <h2>Features</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h4>Track Spending</h4>
                    <p>Keep an eye on where your money goes.</p>
                </div>
                <div class="col-md-4">
                    <div class="icon">
                        <i class="fas fa-piggy-bank"></i>
                    </div>
                    <h4>Save Money</h4>
                    <p>Find ways to save more each month.</p>
                </div>
                <div class="col-md-4">
                    <div class="icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h4>Secure</h4>
                    <p>Your data is safe with us.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <h2>How It Works</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="icon">
                        <i class="fas fa-sign-in-alt"></i>
                    </div>
                    <h4>Sign Up</h4>
                    <p>Create an account quickly and easily.</p>
                </div>
                <div class="col-md-4">
                    <div class="icon">
                        <i class="fas fa-user-edit"></i>
                    </div>
                    <h4>Add Expenses</h4>
                    <p>Log your expenses with ease.</p>
                </div>
                <div class="col-md-4">
                    <div class="icon">
                        <i class="fas fa-chart-pie"></i>
                    </div>
                    <h4>Analyze</h4>
                    <p>Review your spending patterns.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <h2>Testimonials</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="icon">
                        <i class="fas fa-user"></i>
                    </div>
                    <h4>John Doe</h4>
                    <p>"This app has changed how I manage my finances."</p>
                </div>
                <div class="col-md-4">
                    <div class="icon">
                        <i class="fas fa-user"></i>
                    </div>
                    <h4>Jane Smith</h4>
                    <p>"I love the simplicity of this expense manager."</p>
                </div>
                <div class="col-md-4">
                    <div class="icon">
                        <i class="fas fa-user"></i>
                    </div>
                    <h4>Bob Johnson</h4>
                    <p>"A must-have tool for managing finances."</p>
                </div>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <h2>Contact Us</h2>
            <div class="icon">
                <i class="fas fa-envelope"></i>
            </div>
            <p>Have questions? <a href="mailto:support@expensemanager.com" class="text-white">Email us</a>.</p>
        </div>
    </div>
@endsection
