<?php
header('Content-Type: application/json');

$response = ['success' => false, 'message' => ''];

try {
    // Check if form was submitted
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        throw new Exception('Invalid request method');
    }

    // Get form data
    $data = [
        'fullName' => $_POST['fullName'] ?? '',
        'email' => $_POST['email'] ?? '',
        'phone' => $_POST['phone'] ?? '',
        'state' => $_POST['state'] ?? '',
        'role' => $_POST['role'] ?? '',
        'experience' => $_POST['experience'] ?? '',
        'coverLetter' => $_POST['coverLetter'] ?? '',
        'linkedin' => $_POST['linkedin'] ?? ''
    ];

    // Basic validation
    if (empty($data['fullName']) || empty($data['email']) || empty($data['phone'])) {
        throw new Exception('Please fill all required fields');
    }

    // Process file upload if exists
    $cvPath = '';
    if (isset($_FILES['cv']) && $_FILES['cv']['error'] === UPLOAD_ERR_OK) {
        $allowedTypes = ['application/pdf', 'application/msword', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'];
        $maxSize = 5 * 1024 * 1024; // 5MB
        
        if (!in_array($_FILES['cv']['type'], $allowedTypes)) {
            throw new Exception('Invalid file type. Only PDF, DOC, and DOCX are allowed.');
        }
        
        if ($_FILES['cv']['size'] > $maxSize) {
            throw new Exception('File too large. Maximum size is 5MB.');
        }
        
        $uploadDir = 'uploads/';
        if (!file_exists($uploadDir)) {
            mkdir($uploadDir, 0755, true);
        }
        
        $cvPath = $uploadDir . basename($_FILES['cv']['name']);
        if (!move_uploaded_file($_FILES['cv']['tmp_name'], $cvPath)) {
            throw new Exception('Failed to upload CV');
        }
    }

    // Prepare email
    $to = 'hmztadeleke@gmail.com'; // Replace with your email
    $subject = 'New Job Application: ' . $data['fullName'];
    
    $message = "
    <h2>New Job Application</h2>
    <p><strong>Name:</strong> {$data['fullName']}</p>
    <p><strong>Email:</strong> {$data['email']}</p>
    <p><strong>Phone:</strong> {$data['phone']}</p>
    <p><strong>State:</strong> {$data['state']}</p>
    <p><strong>Role:</strong> {$data['role']}</p>
    <p><strong>Experience:</strong> {$data['experience']}</p>
    <p><strong>Cover Letter:</strong> {$data['coverLetter']}</p>
    <p><strong>LinkedIn:</strong> {$data['linkedin']}</p>
    ";
    
    if ($cvPath) {
        $message .= "<p><strong>CV:</strong> Attached</p>";
    }

    $headers = "From: {$data['email']}\r\n";
    $headers .= "Reply-To: {$data['email']}\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    // Send email
    $mailSent = mail($to, $subject, $message, $headers);
    
    if (!$mailSent) {
        throw new Exception('Failed to send email');
    }

    $response['success'] = true;
    $response['message'] = 'Application submitted successfully!';
    
} catch (Exception $e) {
    $response['message'] = 'Error: ' . $e->getMessage();
    
    // Delete uploaded file if there was an error
    if (!empty($cvPath) && file_exists($cvPath)) {
        unlink($cvPath);
    }
}

echo json_encode($response);