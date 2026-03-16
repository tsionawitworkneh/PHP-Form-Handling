<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Modern Agency</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; }
        body { background-color: #f3f4f6; display: flex; justify-content: center; align-items: center; min-height: 100vh; padding: 20px; }
        .contact-card { background-color: #fff; width: 100%; max-width: 1100px; display: flex; border-radius: 28px; overflow: hidden; box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.15); }
        
        
        .info-sidebar { background-color: #0d111c; color: #fff; padding: 60px 50px; width: 40%; }
        .badge { background-color: #1e2533; color: #818cf8; display: inline-block; padding: 7px 14px; border-radius: 50px; font-size: 11px; font-weight: 800; letter-spacing: 1.5px; margin-bottom: 25px; }
        .info-sidebar h1 { font-size: 3.2rem; font-weight: 800; margin-bottom: 20px; }
        .info-sidebar h1 span { color: #818cf8; }
        .info-sidebar p { color: #94a3b8; line-height: 1.6; margin-bottom: 45px; }
        .contact-item { display: flex; align-items: center; gap: 20px; margin-bottom: 30px; }
        .icon-box { background-color: #1e2533; width: 45px; height: 45px; display: flex; justify-content: center; align-items: center; border-radius: 12px; color: #818cf8; }
       
        .social-section {margin-top: 50px;}

        .social-section h3 {color: #64748b; font-size: 12px;font-weight: 800;letter-spacing: 2px;margin-bottom: 20px;}

        .social-links {display: flex;gap: 15px;}

        .social-box {background-color: #1e2533; width: 50px;height: 50px;display: flex;justify-content: center;align-items: center;border-radius: 16px;color: #ffffff;text-decoration: none;font-size: 18px;transition: all 0.3s ease;border: 1px solid rgba(255, 255, 255, 0.05); }

        .social-box:hover {background-color: #818cf8;transform: translateY(-3px);color: #fff;}
        .social-box i {display: flex;}

        
        .form-section { padding: 60px 50px; width: 60%; }
        .form-group { margin-bottom: 20px; }
        .form-group label { display: block; font-size: 14px; font-weight: 700; color: #334155; margin-bottom: 8px; }
        input[type="text"], input[type="email"], textarea {
            width: 100%; padding: 14px; border-radius: 12px; border: 1px solid #e2e8f0; background-color: #f8fafc; font-size: 14px; outline: none;
        }

        
        
        .options-group { display: flex; gap: 15px; margin-top: 5px; flex-wrap: wrap; }
        .option-item { display: flex; align-items: center; gap: 8px; font-size: 14px; color: #475569; cursor: pointer; }
        .option-item input { cursor: pointer; accent-color: #5846f9; }

        .submit-btn {
            width: 100%; background-color: #5846f9; color: white; padding: 16px; border: none; border-radius: 14px; 
            font-size: 16px; font-weight: 700; cursor: pointer; display: flex; justify-content: center; align-items: center; gap: 10px; transition: 0.3s;
        }
        .submit-btn:hover { background-color: #4338ca; }

        @media (max-width: 900px) { .contact-card { flex-direction: column; } .info-sidebar, .form-section { width: 100%; } }
    </style>
</head>
<body>

    <div class="contact-card">
        <aside class="info-sidebar">
            <div class="badge">CONTACT US</div>
            <h1>Get in <span>touch</span></h1>
            <p>Have a project in mind? Fill out the form and our team will get back to you shortly.</p>
            <div class="contact-item">
                <div class="icon-box"><i class="fa-solid fa-envelope"></i></div>
                <div><small style="color:#64748b; font-weight:700; font-size:11px;">EMAIL US</small><br>hello@support.com</div>
            </div>
            <div class="contact-item">
                <div class="icon-box"><i class="fa-solid fa-phone"></i></div>
                <div><small style="color:#64748b; font-weight:700; font-size:11px;">CALL US</small><br>+1 (234) 567-897</div>
            </div>

            <div class="contact-item">
                <div class="icon-box"><i class="fa-solid fa-location"></i></div>
                <div><small style="color:#64748b; font-weight:700; font-size:11px;">REACH US AT</small><br>123 Street ABC House</div>
            </div>

            <!-- Social Media Section -->
            <div class="social-section">
                <h3>CONNECT WITH US</h3>
                <div class="social-links">
                    <a href="#" class="social-box"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="social-box"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#" class="social-box"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#" class="social-box"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
            </div>
        </aside>

        <main class="form-section">
            <form action="process_contact.php" method="POST">
                <div class="form-group">
                    <label for="full_name">Full Name</label>
                    <input type="text" id="full_name" name="full_name" placeholder="Enter your fullname" required>
                </div>

                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" placeholder="Enter your email (e.g example@gmail.com)" required>
                </div>

                <div class="form-group">
                    <label for="subject">Subject</label>
                    <input type="text" id="subject" name="subject" placeholder="Project Inquiry" required>
                </div>

                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" rows="4" placeholder="Tell us about your project..." required></textarea>
                </div>

                
                <div class="form-group">
                    <label>How did you hear about us?</label>
                    <div class="options-group">
                        <label class="option-item"><input type="radio" name="source" value="Friend" required> Friend</label>
                        <label class="option-item"><input type="radio" name="source" value="Internet"> Internet</label>
                        <label class="option-item"><input type="radio" name="source" value="Advertisement"> Advertisement</label>
                    </div>
                </div>

                
                <div class="form-group">
                    <label>Preferred Contact Method</label>
                    <div class="options-group">
                        <label class="option-item"><input type="checkbox" name="contact_method[]" value="Email"> Email</label>
                        <label class="option-item"><input type="checkbox" name="contact_method[]" value="Phone"> Phone</label>
                    </div>
                </div>

                <button type="submit" class="submit-btn">
                    Send Message <i class="fa-solid fa-paper-plane"></i>
                </button>
            </form>
        </main>
    </div>

</body>
</html>