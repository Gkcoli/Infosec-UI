<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Workflow</title>
    <!-- Link to Google Fonts for Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        /* General styles */
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #F6F4F0;
        }

        .container {
            max-width: 1340px;
            margin: 20px auto;
            padding: 20px;
        }

        /* Header styles */
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            margin-bottom: 20px;
        }

        .header-left {
            display: flex;
            align-items: center;
            margin-left: 120px; 
        }

        .logo {
            margin-bottom: 10px; 
        }

        .profile-photo {
            width: 180px;
            height: 180px;
            border-radius: 50%;
            margin-right: 20px;
            object-fit: cover;
            object-position: top; 
        }

        .profile-info h1 {
            margin: 0;
            font-size: 32px;
            color: #4DA1A9;
            font-weight: bold;
        }

        .profile-info p {
            margin: 4px 0;
            font-size: 16px;
            color: #777;
        }

        /* Date and time styles */
        .date-time {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            background-color: #2E5077;
            color: #fff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 300px; /* Set a fixed width to make it rectangular */
            height: 150px; /* Set a fixed height to make it rectangular */
        }

        .date-time h2 {
            margin: 0;
            font-size: 1.3rem;
            font-style: italic;
            color: #fff;
        }

        .date-time .clock {
            font-size: 2.9rem;
            font-weight: bold;
            margin-top: 10px;
        }

        .button-container {
            margin-top: 20px;
            display: flex;
            gap: 10px;
        }

        .button-container button {
            padding: 10px 20px;
            font-size: 16px;
            color: #F6F4F0;
            background-color: #2E5077;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            box-shadow: 0 0 0 1px #F6F4F0; /* Added outside stroke */
        }

        .button-container button:hover {
            background-color: #1f3958;
        }

        /* Navigation styles */
        nav {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 20px;
            padding: 10px 0;
        }

        nav a {
            padding: 10px 20px;
            font-size: 16px;
            text-decoration: none;
            color: #2E5077;
            font-weight: bold;
            border-radius: 10px 10px 0 0;
            background-color: #F6F4F0;
            border: 2px solid transparent;
            margin-right: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease, color 0.3s ease, transform 0.3s ease;
            text-align: center;
        }

        nav a.active {
            background-color: #2E5077;
            color: #F6F4F0;
            border-color: #F6F4F0;
            transform: translateY(-5px);
        }

         /* Attendance History */
        .attendance-history,
        .leave-section {
            margin-top: 20px;
            display: none;
        }

        .attendance-history {
            background-color: #2E5077;
            padding: 30px;
            border-radius: 20px;
        }

        .attendance-history.active,
        .leave-section.active {
            display: block;
        }

        .attendance-history-inner,
        .leave-history-inner {
            background-color: #F6F4F0;
            padding: 50px;
            border-radius: 20px;
        }

        .attendance-history-inner h2,
        .leave-history-inner h2 {
            margin: 0 0 20px 0;
            font-size: 48px;
            color: #2E5077;
            font-weight: 1000;
            text-align: left;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            border: 1px solid black;
        }

        table th,
        table td {
            border-left: 1px solid black;
            border-right: 1px solid black;
            padding: 5px;
            text-align: center;
            font-size: 18px; /* Contents font size */
        }

        table th {
            background-color: #2E5077;
            color: white;
            font-weight: bold;
            font-size: 24px; /* Border font size */
        }
        /* Leave Section */
        .leave-section {
            background-color: #2E5077;
            padding: 30px; /* Consistent padding */
            border-radius: 20px; /* Consistent border-radius */
            margin-top: 20px;
        }

        .leave-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: space-between;
            align-items: stretch;
        }

        .leave-details, .leave-request {
            background-color: #F6F4F0;
            padding: 30px; /* Consistent padding */
            border-radius: 20px; /* Consistent border-radius */
            flex: 1 1 calc(50% - 10px);
        }

        /* Leave Details Section */
        .leave-details h2 {
            font-size: 40px;
            font-weight: 800;
            color: #2E5077;
            margin-top: 0;
            margin-bottom: 15px;
        }

        .leave-details .leave-item {
            display: flex;
            justify-content: space-between;
            padding: 10px 0;
            border-bottom: 1px solid #E0E0E0;
        }

        .leave-details .leave-item:last-child {
            border-bottom: none;
        }

        .leave-details .leave-item h3 {
            font-size: 16px;
            color: #003366;
            margin: 0;
        }

        .leave-details .leave-item p {
            font-size: 18px;
            color: #4DA1A9;
            font-weight: bold;
            margin: 0;
        }

        /* Leave Request Section */
        .leave-request {
            background-color: #F6F4F0; /* Consistent background color */
            padding: 30px; /* Consistent padding */
            border-radius: 20px; /* Consistent border-radius */
            margin-top: 20px; /* Spacing matches other sections */
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Matches styling of Away from Work */
            border: none; /* Ensure no solid border for modern look */
        }

        .leave-request h2 {
            font-size: 40px;
            font-weight: 800;
            color: #2E5077;
            margin-top: 0;
            margin-bottom: 15px;
        }

        .leave-request .form-group {
            margin-bottom: 15px;
        }

        .leave-request .form-group label {
            display: block;
            font-size: 14px;
            margin-bottom: 5px;
        }

        .leave-request .form-group input,
        .leave-request .form-group select {
            width: 100%;
            padding: 10px;
            font-size: 14px;
            border: 1px solid #E0E0E0;
            border-radius: 5px;
        }

        .leave-request button {
            padding: 10px 20px;
            font-size: 14px;
            background-color: #4DA1A9;
            color: white;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            display: block;
            margin: 0 auto;
        }

        .leave-request button:hover {
            background-color: #3b8994;
        }

        /* Consistent Styling for Leave History */
        .leave-history {
            background-color: #F6F4F0;
            padding: 30px; /* Consistent padding */
            border-radius: 20px; /* Consistent border-radius */
            margin-top: 20px;
        }

        .leave-history-inner {
            background-color: #F6F4F0;
            padding: 30px; /* Consistent padding */
            border-radius: 20px; /* Consistent border-radius */
        }

        .leave-history-inner h2 {
            margin: 0 0 15px 0;
            font-size: 48px;
            color: #2E5077;
            font-weight: 800;
        }

        .leave-history table {
            width: 100%;
            border-collapse: collapse;
        }

        .leave-history table th,
        .leave-history table td {
            padding: 10px; /* Adjusted padding for consistency */
            text-align: center;
            font-size: 18px;
        }

        .leave-history table th {
            background-color: #2E5077;
            color: white;
            font-weight: bold;
            font-size: 24px;
        }

        .leave-history table tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .leave-history table tr:hover {
            background-color: #f1f1f1;
        }

        .leave-history table td a {
            background-color: #2E5077;
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 12px;
            text-decoration: none;
            display: inline-block;
        }

        .leave-history table td a:hover {
            background-color: #1f3958;
        }

         /* Away from Work Section */
        .away-from-work {
            background-color: #F6F4F0; /* Consistent background color */
            padding: 30px; /* Consistent padding */
            border-radius: 20px; /* Same border-radius as other sections */
            margin-top: 20px; /* Ensure spacing matches other sections */
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Matches new section styling */
            border: none; /* Ensure no solid border for modern look */
         }
  
        

        .away-from-work h2 {
            font-size: 40px; /* Updated font size */
            font-weight: 900; /* Updated font weight */
            text-align: left;
            color: #2E5077;
            margin-top: 0px;
        }

        .away-from-work .leave-item {
            display: flex;
            align-items: center;
            padding: 10px 0;
            border-bottom: 1px solid #E0E0E0;
        }

        .away-from-work .leave-item img {
            width: 90px; /* Adjusted width */
            height: 90px; /* Adjusted height */
            margin-right: 10px;
        }

        .away-from-work .leave-item h3, .away-from-work .leave-item p {
            text-align: left; /* Ensure text is aligned to the left */
            margin: 0; /* Remove any default margin */
        }

        .away-from-work .leave-item h3 {
            flex: 1; /* Allow h3 to take available space */
        }

        .away-from-work .leave-item p {
            flex: 0 0 auto; /* Prevent p from stretching */
        }

        .away-from-work .leave-item:last-child {
            border-bottom: none;
        }

        .away-from-work .leave-item .leave-info {
            display: flex;
            justify-content: space-between;
            width: 100%;
        }

        .away-from-work .leave-item .leave-info span {
            font-size: 16px;
            color: #003366;
        }

        .away-from-work .leave-item .leave-info .hours {
            color: #4DA1A9;
            font-weight: bold;
        }
        
        .leave-details h2,
        .leave-request h2 {
            font-size: 40px; /* Increased font size */
            font-weight: 800; /* Increased font weight */
            color: #2E5077;
            margin-bottom: 15px;
            width: 100%; /* Ensure the titles take the full width of the container */
            margin-top: 0; /* Remove top margin */
        }
        
        .leave-details .leave-item {
            display: flex;
            justify-content: space-between;
            padding: 10px 0;
            border-bottom: 1px solid #E0E0E0;
        }
        
        .leave-details .leave-item:last-child {
            border-bottom: none;
        }
        
        .leave-details .leave-item h3 {
            font-size: 16px;
            color: #003366;
            margin: 0;
        }
        
        .leave-details .leave-item p {
            font-size: 18px;
            color: #4DA1A9;
            font-weight: bold;
            margin: 0;
        }
        
        .leave-request .form-group {
            margin-bottom: 15px;
        }
        
        .leave-request .form-group label {
            display: block;
            font-size: 14px;
            margin-bottom: 5px;
        }
        
        .leave-request .form-group input,
        .leave-request .form-group select {
            width: 100%;
            padding: 10px;
            font-size: 14px;
            border: 1px solid #E0E0E0;
            border-radius: 5px;
        }
        
        .leave-request button {
            width: auto; /* Adjust width to auto */
            padding: 10px 20px; /* Adjust padding for smaller size */
            font-size: 14px; /* Adjust font size */
            background-color: #4DA1A9;
            color: white;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            display: block;
            margin: 0 auto; /* Center align */
        }
        
        .leave-request button:hover {
            background-color: #3b8994;
        }

        .outer-container {
            background-color: #003366;
            padding: 20px;
        }

        .leave-section {
            background-color: #2E5077;
            padding: 30px;
            border-radius: 20px;
            margin-top: 20px;
        }

        .leave-container {
            display: flex;
            justify-content: space-between;
            gap: 20px;
        }

        .leave-details, .leave-request {
            background-color: #F6F4F0;
            padding: 30px;
            border-radius: 20px;
            flex: 1;
           
        }

        .leave-details div {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 15px;
        }

        .leave-details div h3 {
            font-size: 16px;
            color: #003366;
        }

        .leave-details div p {
            font-size: 18px;
            color: #4DA1A9;
            font-weight: bold;
        }

        .leave-request form div {
            margin-bottom: 15px;
        }

        .leave-request form label {
            display: block;
            font-size: 16px;
            margin-bottom: 5px;
        }

        .leave-request form input,
        .leave-request form select,
        .leave-request form textarea {
            width: 100%;
            padding: 10px;
            font-size: 14px;
            border: 1px solid #F6F4F0;
            border-radius: 5px;
        }

        .leave-request form button {
            display: block;
            width: 100%;
            padding: 10px;
            font-size: 16px;
            background-color: #4DA1A9;
            color: white;
            border: none;
            border-radius: 10px;
            cursor: pointer;
        }

        .leave-request form button:hover {
            background-color: #3b8994;
        }

        .leave-history {
            background-color: #F6F4F0;
            padding: 20px; /* Same padding as other sections */
            border-radius: 10px; /* Same border-radius as other sections */
            flex: 1 1 calc(50% - 10px); /* Same flex properties as other sections */
            margin-top: 20px; /* Same margin-top as other sections */
        }

        .leave-history-inner {
            background-color: #F6F4F0;
            padding: 20px; /* Adjusted padding to match other sections */
            border-radius: 20px; /* Adjusted border-radius to match other sections */
        }

        .leave-history-inner h2 {
            margin: 0 0 15px 0; /* Adjusted margin to match other sections */
            font-size: 48px; /* Adjusted font size to match other sections */
            color: #2E5077;
            font-weight: 800; /* Adjusted font weight to match other sections */
        }

        .leave-history table {
            width: 100%;
            border-collapse: collapse;
            border: 1px solid black;
        }

        .leave-history table th,
        .leave-history table td {
            border-left: 1px solid black;
            border-right: 1px solid black;
            padding: 5px;
            text-align: center;
            font-size: 18px; /* Contents font size */
        }

        .leave-history table th {
            background-color: #2E5077;
            color: white;
            font-weight: bold;
            font-size: 24px; /* Border font size */
        }

        .leave-history table tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .leave-history table tr:hover {
            background-color: #f1f1f1;
        }

        .leave-history table td a {
            background-color: #2E5077;
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 12px;
            text-decoration: none; /* Ensure it looks like a button */
            display: inline-block; /* Ensure it behaves like a button */
        }

        .leave-history table td a:hover {
            background-color: #1f3958;
        }

            
    /* Modal Overlay */
    .confirm-modal {
        display: none; /* Hidden by default */
        position: fixed;
        z-index: 2;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgba(0, 0, 0, 0.4); /* Dimmed background */
        padding-top: 60px;
    }

    /* Modal Content */
    .confirm-modal-content {
        background-color: #FAF7F4; /* Slight beige/cream background for softness */
        margin: 5% auto;
        padding: 30px; /* Comfortable padding */
        border-radius: 12px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        width: 500px; /* Adjusted for a compact view */
        max-width: 90%; /* For responsiveness */
        text-align: left;
        font-family: 'Arial', sans-serif;
        position: relative;
    }

    /* Close Icon */
    .confirm-close {
        position: absolute;
        top: 15px;
        right: 15px;
        color: #4DA1A9;
        font-size: 24px;
        font-weight: bold;
        cursor: pointer;
    }

    .confirm-close:hover {
        color: #1f3958;
    }

    /* Modal Header */
    .confirm-modal-header {
        font-size: 30px;
        font-weight: bold;
        color: #4DA1A9;
        margin-bottom: 10px;
    }

    .confirm-modal-header::after {
        content: "";
        display: block;
        margin-top: 10px;
        width: 100%; /* Full width of the modal content */
        height: 2px;
        background-color: #CCCCCC;
    }

        /* Modal Body */
    .confirm-modal-body {
        font-size: 18px;
        font-weight: 600; /* Semibold */
        color: black; /* Changed color to black */
        line-height: 1.6;
        margin-top: 20px;
    }

    .modal-row span {
        font-weight: bold;
        color: #2E5077; /* Slightly muted dark blue for labels */
    }

    /* Footer (Confirm Button Section) */
    .confirm-modal-footer {
        display: flex;
        justify-content: center; /* Center-align the button */
        margin-top: 30px;
    }

    /* Confirm Button */
    .confirm-button {
        padding: 10px 30px; /* Comfortable size */
        font-size: 16px;
        font-weight: bold;
        background-color: #4DA1A9; /* Soft teal */
        color: #FFFFFF;
        border: none;
        border-radius: 6px;
        cursor: pointer;
        transition: all 0.3s ease-in-out;
    }



    .confirm-modal-body .modal-row .modal-value {
        color: black; /* Changed color to black */
    }
    .confirm-modal-body .modal-row .modal-label {
        color: black; /* Changed color to black */
    }
        .textbox {
            width: 100%; /* Ensure full width */
            padding: 10px;
            font-size: 14px;
            border: 1px solid #E0E0E0;
            border-radius: 5px;
            box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);
        }
        .refined-textbox {
            background-color: #fff;
            border: 2px solid #4DA1A9;
            padding: 12px;
            font-size: 16px;
            border-radius: 8px;
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
            box-sizing: border-box; /* Include padding and border in element's total width and height */
        }
        .refined-textbox:focus {
            border-color: #2E5077;
            box-shadow: 0 0 5px rgba(46, 80, 119, 0.5);
            outline: none;
        }
        .form-container {
            background-color: #fcfcfa;
            border: 5px solid #205aab;
            border-radius: 10px;
            padding: 25px;
            width: 420px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        .form-container h2 {
            color: #205aab;
            font-size: 22px;
            font-weight: bold;
            margin-bottom: 15px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            font-size: 14px;
            font-weight: bold;
            margin-bottom: 5px;
            display: block;
        }

        .textbox {
            width: calc(50% - 10px);
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
            display: inline-block;
            margin-right: 10px;
        }

        .textbox:last-child {
            margin-right: 0;
        }

        .full-width-textbox {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
        }

        .submit-btn {
            background-color: #309fc0;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px 30px;
            font-size: 14px;
            cursor: pointer;
        }

        .submit-btn:hover {
            background-color: #2788a7;
        }

        .form-inline {
            display: flex;
            align-items: center;
        }

        .form-inline label {
            margin-right: 10px;
        } 

        /* Payroll Section */
        .payroll-section {
            background-color: #F6F4F0; /* Consistent background color */
            padding: 30px;
            border-radius: 20px;
            margin-top: 20px;
            display: none; /* Initially hidden */
        }

        .payroll-section.active {
            display: block; /* Display when active */
        }

        .payroll-container {
            background-color: #2E5077;
            padding: 30px;
            border-radius: 20px;
        }

        .payroll-overview {
            padding: 20px;
            border-radius: 20px;
            margin-bottom: 20px;
            background-color: #F6F4F0; /* Light background color */
        }

        .payroll-overview h2 {
            margin: 0 0 20px 0;
            font-size: 48px;
            color: #2E5077;
            font-weight: 1000;
            text-align: left;
        }

        .payroll-overview h3 {
            margin: 0 0 15px 0;
            font-size: 22px;
            color: #2E5077;
        }

        .payroll-overview p {
            font-size: 16px;
            color: #2E5077;
        }

        .payroll-overview .breakdown {
            padding: 20px;
            border-radius: 8px;
        }

        .payroll-overview .breakdown table {
            width: 100%;
            border-collapse: collapse;
            border: 1px solid #ddd; /* Add outside border */
        }

        .payroll-overview .breakdown table td {
            padding: 10px;
            border: none; /* Remove inside borders */
        }

        .payroll-overview .breakdown table td:last-child {
            text-align: right;
        }

        .payroll-overview .breakdown .total {
            background-color: #4DA1A9;
            font-weight: bold;
            color: white;
        }

        .payment-history {
            padding: 30px;
            border-radius: 20px;
            background-color: #F6F4F0; /* Light background color */
       
        }

        .payment-history h3 {
            margin: 0 0 20px 0; /* Same margin as Payroll Overview */
            font-size: 48px; /* Same font size as Payroll Overview */
            color: #2E5077; /* Same color as Payroll Overview */
            font-weight: 1000; /* Same font weight as Payroll Overview */
            text-align: left; /* Same text alignment as Payroll Overview */
        }

        .payment-history table {
            width: 100%;
            border-collapse: collapse;
        }

        .payment-history table th,
        .payment-history table td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #d1d5db;
        }

        .payment-history table th {
            background-color: #2E5077;
            color: #F6F4F0;
            font-size: 24px;
        }

        .payment-history table td {
            font-size: 18px;
        }

        .payment-history table td:last-child {
            text-align: center;
        }

        .payment-history table td button {
            background-color: #2E5077;
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 12px;
        }

        .payroll-section {
            background-color: #F6F4F0;
            padding: 20px;
            border-radius: 20px;
            margin-top: 20px;
        }

        .payroll-container {
            background-color: #2E5077;
            padding: 30px;
            border-radius: 20px;
        }

        .payroll-overview {
            background-color: #F6F4F0;
        .payroll-overview .breakdown table {
            width: 100%;
            border-collapse: collapse;
        }

        .payroll-overview .breakdown table td {
            padding: 10px;
            font-size: 16px;
        }

        .payroll-overview .breakdown table td:last-child {
            text-align: right;
        }

        .payroll-overview .breakdown .total td {
            background-color: #4DA1A9;
            color: white;
            font-weight: bold;
            padding: 10px;
            font-size: 18px;
        }

        .payroll-overview .breakdown h3 {
            margin: 0;
            font-size: 16px;
            color: white;
           border-radius: 0 !important; /* Ensure border-radius is removed */
        }

    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="header-left">
                <img src="workflow logo.png" alt="Workflow Logo" style="width: 100px; height: auto; position: absolute; top: 20px; left: 20px;">
                <img src="https://i.pinimg.com/736x/32/48/78/324878fb2d8decffc8341ccff0ac672c.jpg" alt="Profile Photo" class="profile-photo">
                <div class="profile-info">
                    <h1>Choi Beomgyu</h1>
                    <p>ID # 1234 5678</p>
                    <p>Junior Developer, IT Department</p>
                </div>
            </div>
            <div class="date-time">
                <h2 id="current-date"></h2> <!-- Updated to dynamically update the date -->
                <div id="clock" class="clock">08:01:00</div>
                <div class="button-container">
                    <button onclick="recordBreak()">BREAK</button>
                    <button onclick="recordTimeout()">TIME OUT</button>
                </div>
            </div>
        </div>

        <nav>
            <a href="#" class="active" onclick="switchTab(event, 'attendance-history')">Check In</a>
            <a href="#" onclick="switchTab(event, 'leave-section')">Leave</a>
            <a href="#" onclick="switchTab(event, 'payroll-section')">Payroll</a>
        </nav>

        <div id="attendance-history" class="attendance-history active">
            <div class="attendance-history-inner">
                <h2>Attendance History</h2>
                <table>
                    <thead>
                        <tr>
                            <th>DATE</th>
                            <th>TIME IN</th>
                            <th>TIME OUT</th>
                            <th>BREAK</th>
                            <th>DURATION</th>
                            <th>HOURS</th>
                            <th>STATUS</th>
                        </tr>
                    </thead>
                    <tbody id="attendance-records">
                    </tbody>
                </table>
            </div>
        </div>
        
        <div id="leave-section" class="leave-section">
            <div class="leave-container">
                <div class="away-from-work">
                    <h2>Away from Work</h2>
                    <div class="leave-item">
                        <img src="1.png" alt="Icon">
                        <h3>Scheduled Paid Leave</h3>
                        <p>24 hours</p>
                    </div>
                    <div class="leave-item">
                        <img src="2.png" alt="Icon">
                        <h3>Sick Leave</h3>
                        <p>48 hours</p>
                    </div>
                    <div class="leave-item">
                        <img src="3.png" alt="Icon">
                        <h3>Vacation Leave</h3>
                        <p>23 hours</p>
                    </div>
                </div>
                <div class="leave-request">
                    <div class="leave-request-inner">
                        <h2>Request Leave</h2>
                        <form>
                            <div class="form-group">
                                <label for="leave-from">Leave Date</label>
                                <div class="form-inline">
                                    <label for="leave-from">From:</label>
                                    <input type="date" id="leave-from" class="textbox">
                                    <label for="leave-to">To:</label>
                                    <input type="date" id="leave-to" class="textbox">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="leave-type">Type of Leave</label>
                                <select id="leave-type" class="full-width-textbox">
                                    <option value="">Select Leave Type</option>
                                    <option value="Paid Leave">Paid Leave</option>
                                    <option value="Sick Leave">Sick Leave</option>
                                    <option value="Vacation Leave">Vacation Leave</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="submit-btn" style="background-color: #4DA1A9; color: white; border: none; border-radius: 10px; padding: 10px 20px; font-size: 16px; cursor: pointer;">SUBMIT</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="leave-history">
                <div class="leave-history-inner">
                    <h2>Leave History</h2>
                    <table>
                        <thead>
                            <tr>
                                <th>START DATE</th>
                                <th>END DATE</th>
                                <th>KIND</th>
                                <th>DURATION</th>
                                <th>STATUS</th>
                                <th>FILES</th>
                            </tr>
                        </thead>
                        <tbody id="leave-history-records">
                            <tr>
                                <td>November 25, 2024</td>
                                <td>November 25, 2024</td>
                                <td>Sick Leave</td>
                                <td>8 hours</td>
                                <td>Approved</td>
                                <td><a href="#">View</a></td> <!-- Ensure the View button is inside the Files column -->
                            </tr>
                            <!-- Additional rows can go here -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div id="payroll-section" class="payroll-section">
            <div class="payroll-container">
                <div class="payroll-overview">
                    <h2 style="font-size: 40px; font-weight: bold;">Payroll Overview</h2>
                    <h3>Upcoming Payroll Release: <span style="color: #4DA1A9; font-weight: bold;">December 29, 2024</span></h3>
                    <div class="breakdown">
                        <h3 style="background-color: #2E5077; color: #F6F4F0; padding: 10px; border-radius: 5px; font-size: 18px;">EXPECTED BREAKDOWN OF PAYSLIP</h3>
                        <table>
                            <tr>
                                <td style="text-align: left;">Hours worked</td>
                                <td>24 hrs</td>
                            </tr>
                            <tr>
                                <td style="text-align: left;">Pay per hour</td>
                                <td>P300.00/hr</td>
                            </tr>
                            <tr>
                                <td style="text-align: left;">Deductions:</td>
                                <td style="text-align: left;">-Taxes (10%)</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td style="color: #4DA1A9; text-align: right;">P30.00</td>
                            </tr>
                            <tr class="total">
                                <td style="text-align: left; font-style: italic;">TOTAL AMOUNT:</td>
                                <td style="font-style: italic">P770.00</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="payment-history">
                    <h3>Payment History</h3>
                    <table>
                        <thead>
                            <tr>
                                <th>TRANSACTION ID</th>
                                <th>DATE</th>
                                <th>TIME</th>
                                <th>TOTAL AMOUNT</th>
                                <th>STATUS</th>
                                <th>VIEW</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>November 25, 2024</td>
                                <td>November 25, 2024</td>
                                <td>8:09:30</td>
                                <td>P800</td>
                                <td>Completed</td>
                                <td><button>View</button></td>
                            </tr>
                            <!-- Repeat rows as needed -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Confirm Modal -->
    <div id="confirmModal" class="confirm-modal">
        <div class="confirm-modal-content">
            <span class="confirm-close" onclick="closeModal()">&#10005;</span>
            <div class="confirm-modal-header">Confirm Leave Request</div>
            <div class="confirm-modal-body">
                <div class="modal-row">
                    <span class="modal-label">From:</span>
                    <span class="modal-value" id="modal-from-date"></span>
                </div>
                <div class="modal-row">
                    <span class="modal-label">To:</span>
                    <span class="modal-value" id="modal-to-date"></span>
                </div>
                <div class="modal-row">
                    <span class="modal-label">Kind of Leave:</span>
                    <span class="modal-value" id="modal-leave-type"></span>
                </div>
            </div>
            <div class="confirm-modal-footer">
                <button class="confirm-button" onclick="confirmClose()">CONFIRM</button>
            </div>
        </div>
    </div>

    <script>
        function updateClock() {
            const now = new Date();
            const timeString = now.toLocaleTimeString('en-US', { hour12: true });
            document.getElementById('clock').textContent = timeString;
        }

        function updateDate() {
            const today = new Date();
            const options = { year: 'numeric', month: 'long', day: 'numeric' };
            const dateString = today.toLocaleDateString('en-US', options);
            document.getElementById('current-date').textContent = dateString; // Updated to dynamically update the date
        }

        function switchTab(event, sectionId) {
            document.querySelectorAll('nav a').forEach(tab => tab.classList.remove('active'));
            event.target.classList.add('active');

            document.querySelectorAll('.attendance-history, .leave-section, .payroll-section').forEach(section => section.classList.remove('active'));
            document.getElementById(sectionId).classList.add('active');
        }

        const attendanceData = [
            {
                date: 'November 25, 2024',
                timeIn: '8:09:30',
                timeOut: '5:09:30',
                breakTime: '1:00:00',
                duration: '9:00:00',
                hours: '8:00:00',
                status: 'Present'
            },
            {
                date: 'November 26, 2024',
                timeIn: '8:10:23',
                timeOut: '5:11:23',
                breakTime: '1:00:00',
                duration: '9:01:00',
                hours: '8:01:00',
                status: 'Present'
            }
        ];

        function loadAttendanceRecords() {
            const tableBody = document.getElementById('attendance-records');
            attendanceData.forEach(record => {
                const row = `<tr>
                    <td>${record.date}</td>
                    <td>${record.timeIn}</td>
                    <td>${record.timeOut}</td>
                    <td>${record.breakTime}</td>
                    <td>${record.duration}</td>
                    <td>${record.hours}</td>
                    <td>${record.status}</td>
                </tr>`;
                tableBody.insertAdjacentHTML('beforeend', row);
            });
        }

        function recordBreak() {
            alert('Break recorded!');
        }

        function recordTimeout() {
            alert('Time out recorded!');
        }

        function submitLeaveRequest(event) {
            event.preventDefault();
            const leaveType = document.getElementById('leave-type').value;
            const leaveFrom = document.getElementById('leave-from').value;
            const leaveTo = document.getElementById('leave-to').value;

            if (leaveType && leaveFrom && leaveTo) {
                document.getElementById('modal-from-date').textContent = formatDate(leaveFrom);
                document.getElementById('modal-to-date').textContent = formatDate(leaveTo);
                document.getElementById('modal-leave-type').textContent = leaveType;

                const confirmModal = document.getElementById('confirmModal');
                confirmModal.style.display = 'block';
            } else {
                alert('Please fill out all fields before submitting.');
            }
        }

        function closeModal() {
            const confirmModal = document.getElementById('confirmModal');
            confirmModal.style.display = 'none';
        }

        function confirmClose() {
            const confirmModal = document.getElementById('confirmModal');
            confirmModal.style.display = 'none';
            alert('Leave request confirmed!');
        }

        function formatDate(dateString) {
            const date = new Date(dateString);
            if (isNaN(date.getTime())) {
                console.error("Invalid date:", dateString); // Handle invalid dates
                return dateString; // Fallback to raw string
            }
            const options = { year: 'numeric', month: 'long', day: 'numeric' }; // Formatting
            return date.toLocaleDateString(undefined, options);
        }

        document.addEventListener('DOMContentLoaded', () => {
            document.querySelector('.leave-request form').addEventListener('submit', submitLeaveRequest);
            updateDate();
            setInterval(updateClock, 1000);
            loadAttendanceRecords();
            loadPayrollRecords();
        });

        // Button to open the modal
        const fileLeaveButton = document.getElementById('fileLeaveButton');

        // Elements within the modal
        const confirmModal = document.getElementById('confirmModal');
        const modalFromDate = document.getElementById('modal-from-date');
        const modalToDate = document.getElementById('modal-to-date');
        const modalLeaveType = document.getElementById('modal-leave-type');

        // Function to format the date into "Month Day, Year"
        function formatDate(dateString) {
            const date = new Date(dateString);
            if (isNaN(date.getTime())) {
                console.error("Invalid date:", dateString); // Handle invalid dates
                return dateString; // Fallback to raw string
            }
            const options = { year: 'numeric', month: 'long', day: 'numeric' }; // Formatting
            return date.toLocaleDateString(undefined, options);
        }

        // Event listener for button click
        fileLeaveButton.addEventListener('click', function () {
            console.log("Opening modal..."); // Debugging log

            // Example inputs (dates should be in 'YYYY-MM-DD' format for parsing)
            const rawFromDate = "2024-12-29";
            const rawToDate = "2025-01-02";
            const leaveTypeValue = "Vacation Leave";

            // Apply formatting and update modal text
            modalFromDate.textContent = formatDate(rawFromDate);
            modalToDate.textContent = formatDate(rawToDate);
            modalLeaveType.textContent = leaveTypeValue;

            console.log("Modal values set:", {
                from: modalFromDate.textContent,
                to: modalToDate.textContent,
                type: modalLeaveType.textContent,
            }); // Debugging log

            confirmModal.style.display = 'block';
        });

        // Function to close the modal
        function closeModal() {
            console.log("Closing modal..."); // Debugging log
            confirmModal.style.display = 'none';
        }

        // Confirm button handler
        function confirmClose() {
            alert('Leave request confirmed!');
            closeModal();
        }

    </script>
</body>
</html>
