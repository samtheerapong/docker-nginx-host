<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mr. Theerapong Khanta | IT Manager</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary: #8A2BE2;
            --secondary: #9400D3;
            --accent: #FFD700;
            --dark: #121212;
            --light: #F8F8FF;
            --gradient: linear-gradient(135deg, var(--primary), var(--secondary));
            --gold-gradient: linear-gradient(135deg, #FFD700, #D4AF37);
            --card-bg: rgba(30, 30, 30, 0.8);
            --text-primary: #F8F8FF;
            --text-secondary: #D3D3D3;
        }
        
        [data-theme="light"] {
            --primary: #8A2BE2;
            --secondary: #9370DB;
            --accent: #D4AF37;
            --dark: #2d3436;
            --light: #F8F8FF;
            --card-bg: rgba(255, 255, 255, 0.9);
            --text-primary: #2d3436;
            --text-secondary: #555;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Chakra Petch', sans-serif;
            transition: background-color 0.3s ease, color 0.3s ease;
        }
        
        body {
            background-color: var(--dark);
            color: var(--text-primary);
            overflow-x: hidden;
        }
        
        /* Theme Toggle */
         .theme-toggle {
            position: fixed;
            top: 1.2rem;
            right: 1.2rem;
            z-index: 1001;
            background: var(--gold-gradient);
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            box-shadow: 0 0 10px rgba(255, 215, 0, 0.5);
            border: none;
            color: var(--dark);
        }
        
        /* Navigation */
        nav {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            padding: 1rem 5%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            z-index: 1000;
            background: rgba(18, 18, 18, 0.9);
            backdrop-filter: blur(10px);
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.3);
        }
        
        [data-theme="light"] nav {
            background: rgba(255, 255, 255, 0.9);
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
        }
        
        .logo {
            font-size: 1.8rem;
            font-weight: 700;
            background: var(--gold-gradient);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }
        
        .nav-links {
            display: flex;
            gap: 2rem;
        }
        
        .nav-links a {
            text-decoration: none;
            color: var(--text-primary);
            font-weight: 500;
            transition: all 0.3s ease;
            position: relative;
        }
        
        .nav-links a::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--gold-gradient);
            transition: width 0.3s ease;
        }
        
        .nav-links a:hover::after {
            width: 100%;
        }
        
        .nav-links a:hover {
            color: var(--accent);
        }
        
        /* Hero Section */
        .hero {
            min-height: 100vh;
            display: flex;
            align-items: center;
            padding: 0 10%;
            position: relative;
            overflow: hidden;
            background: radial-gradient(circle at 70% 50%, rgba(138, 43, 226, 0.2) 0%, rgba(20, 20, 20, 1) 70%);
        }
        
        [data-theme="light"] .hero {
            background: radial-gradient(circle at 70% 50%, rgba(138, 43, 226, 0.1) 0%, rgba(248, 248, 255, 1) 70%);
        }
        
        .hero-content {
            width: 60%;
            z-index: 2;
        }
        
        .hero h1 {
            font-size: 3.5rem;
            margin-bottom: 1.5rem;
            background: var(--gold-gradient);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            line-height: 1.2;
            font-weight: 600;
        }
        
        .hero h2 {
            font-size: 1.5rem;
            font-weight: 400;
            margin-bottom: 2rem;
            color: var(--text-secondary);
        }
        
        .hero p {
            font-size: 1.1rem;
            line-height: 1.6;
            margin-bottom: 2.5rem;
            color: var(--text-secondary);
            font-weight: 300;
        }
        
        .cta-button {
            display: inline-block;
            padding: 0.8rem 2rem;
            background: var(--gold-gradient);
            color: var(--dark);
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
            box-shadow: 0 10px 20px rgba(255, 215, 0, 0.3);
        }
        
        .cta-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 30px rgba(255, 215, 0, 0.4);
        }
        
        .hero-image {
            position: absolute;
            right: 10%;
            top: 50%;
            transform: translateY(-50%);
            width: 30%;
            height: 70%;
            background: url('https://images.unsplash.com/photo-1571171637578-41bc2dd41cd2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80') center/cover;
            border-radius: 20px;
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.5);
            border: 2px solid var(--accent);
        }
        
        /* About Section */
        .about {
            padding: 8rem 10%;
            background: var(--dark);
        }
        
        [data-theme="light"] .about {
            background: var(--light);
        }
        
        .section-title {
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 3rem;
            background: var(--gold-gradient);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            font-weight: 600;
        }
        
        .about-content {
            display: flex;
            gap: 3rem;
            align-items: center;
        }
        
        .about-image {
            flex: 1;
            height: 400px;
            background: url('https://images.unsplash.com/photo-1580927752452-89d86da3fa0a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80') center/cover;
            border-radius: 20px;
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.5);
            border: 2px solid var(--accent);
        }
        
        .about-text {
            flex: 1;
        }
        
        .about-text h3 {
            font-size: 1.8rem;
            margin-bottom: 1.5rem;
            color: var(--text-primary);
            font-weight: 500;
        }
        
        .about-text p {
            font-size: 1.1rem;
            line-height: 1.6;
            margin-bottom: 1.5rem;
            color: var(--text-secondary);
            font-weight: 300;
        }
        
        .skills {
            display: flex;
            flex-wrap: wrap;
            gap: 1rem;
            margin-top: 2rem;
        }
        
        .skill {
            padding: 0.5rem 1.2rem;
            background: rgba(138, 43, 226, 0.1);
            border-radius: 50px;
            color: var(--primary);
            font-weight: 500;
            border: 1px solid var(--primary);
        }
        
        [data-theme="light"] .skill {
            background: rgba(138, 43, 226, 0.05);
        }
        
        /* Experience Section */
        .experience {
            padding: 8rem 10%;
            background: linear-gradient(135deg, #121212 0%, #1a1a1a 100%);
        }
        
        [data-theme="light"] .experience {
            background: linear-gradient(135deg, #f5f7fa 0%, #f5f6fa 100%);
        }
        
        .timeline {
            position: relative;
            max-width: 800px;
            margin: 0 auto;
            padding: 2rem 0;
        }
        
        .timeline::before {
            content: '';
            position: absolute;
            width: 4px;
            background: var(--gold-gradient);
            top: 0;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
        }
        
        .timeline-item {
            padding: 1rem 3rem;
            position: relative;
            width: 50%;
            box-sizing: border-box;
        }
        
        .timeline-item:nth-child(odd) {
            left: 0;
        }
        
        .timeline-item:nth-child(even) {
            left: 50%;
        }
        
        .timeline-content {
            padding: 2rem;
            background: var(--card-bg);
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            position: relative;
            backdrop-filter: blur(5px);
            border: 1px solid rgba(255, 215, 0, 0.1);
        }
        
        .timeline-content::after {
            content: '';
            position: absolute;
            width: 20px;
            height: 20px;
            background: var(--gold-gradient);
            border-radius: 50%;
            top: 30px;
        }
        
        .timeline-item:nth-child(odd) .timeline-content::after {
            right: -50px;
        }
        
        .timeline-item:nth-child(even) .timeline-content::after {
            left: -50px;
        }
        
        .timeline-date {
            font-weight: 600;
            color: var(--accent);
            margin-bottom: 0.5rem;
        }
        
        .timeline-title {
            font-size: 1.3rem;
            margin-bottom: 1rem;
            color: var(--text-primary);
            font-weight: 500;
        }
        
        .timeline-desc {
            color: var(--text-secondary);
            line-height: 1.6;
            font-weight: 300;
        }
        
        /* Projects Section */
        .projects {
            padding: 8rem 10%;
            background: var(--dark);
        }
        
        [data-theme="light"] .projects {
            background: var(--light);
        }
        
        .projects-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 2rem;
        }
        
        .project-card {
            background: var(--card-bg);
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            transition: all 0.3s ease;
            backdrop-filter: blur(5px);
            border: 1px solid rgba(255, 215, 0, 0.1);
        }
        
        .project-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.3);
            border: 1px solid var(--accent);
        }
        
        .project-image {
            height: 200px;
            background-size: cover;
            background-position: center;
            border-bottom: 2px solid var(--accent);
        }
        
        .project-info {
            padding: 1.5rem;
        }
        
        .project-title {
            font-size: 1.3rem;
            margin-bottom: 0.5rem;
            color: var(--text-primary);
            font-weight: 500;
        }
        
        .project-desc {
            color: var(--text-secondary);
            margin-bottom: 1rem;
            font-size: 0.9rem;
            line-height: 1.6;
            font-weight: 300;
        }
        
        .project-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
        }
        
        .project-tag {
            font-size: 0.7rem;
            padding: 0.3rem 0.8rem;
            background: rgba(138, 43, 226, 0.1);
            border-radius: 50px;
            color: var(--primary);
            font-weight: 500;
            border: 1px solid var(--primary);
        }
        
        /* Contact Section */
        .contact {
            padding: 8rem 10%;
            background: linear-gradient(135deg, #121212 0%, #1a1a1a 100%);
            text-align: center;
        }
        
        [data-theme="light"] .contact {
            background: linear-gradient(135deg, #f5f7fa 0%, #f5f6fa 100%);
        }
        
        .contact-form {
            max-width: 600px;
            margin: 0 auto;
            background: var(--card-bg);
            padding: 3rem;
            border-radius: 20px;
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.2);
            backdrop-filter: blur(5px);
            border: 1px solid rgba(255, 215, 0, 0.1);
        }
        
        .form-group {
            margin-bottom: 1.5rem;
            text-align: left;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 500;
            color: var(--text-primary);
        }
        
        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 0.8rem 1rem;
            border: 1px solid rgba(255, 215, 0, 0.3);
            border-radius: 10px;
            font-size: 1rem;
            transition: all 0.3s ease;
            font-family: 'Chakra Petch', sans-serif;
            font-weight: 300;
            background: rgba(30, 30, 30, 0.5);
            color: var(--text-primary);
        }
        
        [data-theme="light"] .form-group input,
        [data-theme="light"] .form-group textarea {
            background: rgba(255, 255, 255, 0.8);
            color: var(--text-primary);
        }
        
        .form-group input:focus,
        .form-group textarea:focus {
            border-color: var(--accent);
            outline: none;
            box-shadow: 0 0 0 3px rgba(255, 215, 0, 0.2);
        }
        
        .form-group textarea {
            min-height: 150px;
            resize: vertical;
        }
        
        .submit-btn {
            background: var(--gold-gradient);
            color: var(--dark);
            border: none;
            padding: 1rem 2.5rem;
            font-size: 1rem;
            font-weight: 600;
            border-radius: 50px;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 10px 20px rgba(255, 215, 0, 0.3);
            font-family: 'Chakra Petch', sans-serif;
        }
        
        .submit-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 30px rgba(255, 215, 0, 0.4);
        }
        
        /* Footer */
        footer {
            background: #0a0a0a;
            color: white;
            padding: 3rem 10%;
            text-align: center;
            border-top: 1px solid rgba(255, 215, 0, 0.2);
        }
        
        [data-theme="light"] footer {
            background: #f0f0f0;
            color: var(--dark);
        }
        
        .social-links {
            display: flex;
            justify-content: center;
            gap: 1.5rem;
            margin-bottom: 2rem;
        }
        
        .social-link {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--accent);
            font-size: 1.2rem;
            transition: all 0.3s ease;
            border: 1px solid rgba(255, 215, 0, 0.3);
        }
        
        .social-link:hover {
            background: var(--gold-gradient);
            transform: translateY(-5px);
            color: var(--dark);
            border-color: transparent;
        }
        
        .copyright {
            color: var(--text-secondary);
            font-size: 0.9rem;
            font-weight: 300;
        }
        
        /* Animations */
        @keyframes float {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-20px);
            }
        }
        
        .floating {
            animation: float 6s ease-in-out infinite;
        }
        
        @keyframes pulse {
            0%, 100% {
                box-shadow: 0 0 0 0 rgba(255, 215, 0, 0.7);
            }
            70% {
                box-shadow: 0 0 0 10px rgba(255, 215, 0, 0);
            }
        }
        
        .pulse {
            animation: pulse 2s infinite;
        }
        
        /* Responsive */
        @media (max-width: 992px) {
            .hero-content {
                width: 100%;
                text-align: center;
            }
            
            .hero-image {
                display: none;
            }
            
            .about-content {
                flex-direction: column;
            }
            
            .about-image {
                width: 100%;
            }
            
            .timeline::before {
                left: 30px;
            }
            
            .timeline-item {
                width: 100%;
                padding-left: 70px;
                padding-right: 0;
            }
            
            .timeline-item:nth-child(even) {
                left: 0;
            }
            
            .timeline-item:nth-child(odd) .timeline-content::after,
            .timeline-item:nth-child(even) .timeline-content::after {
                left: 15px;
            }
        }
    </style>
</head>
<body data-theme="dark">
    <!-- Theme Toggle -->
    <button class="theme-toggle pulse" id="themeToggle">
        <i class="fas fa-moon"></i>
    </button>
    
    <!-- Navigation -->
    <nav>
        <div class="logo">I'm Theerapong</div>
        <div class="nav-links">
            <a href="#home">Home</a>
            <a href="#about">About</a>
            <a href="#experience">Experience</a>
            <a href="#projects">Projects</a>
            <a href="#contact">Contact</a>
        </div>
    </nav>
    
    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="hero-content">
            <h1>Mr. Theerapong Khanta</h1>
            <h2>IT Manager</h2>
            <p>With over 8 years of experience in IT management, I specialize in creating innovative technology solutions that drive business growth and operational efficiency.</p>
            <a href="#contact" class="cta-button">Get In Touch</a>
        </div>
        <div class="hero-image floating"></div>
    </section>
    
    <!-- About Section -->
    <section class="about" id="about">
        <h2 class="section-title">About Me</h2>
        <div class="about-content">
            <div class="about-image"></div>
            <div class="about-text">
                <h3>Professional IT Manager with a Passion for Innovation</h3>
                <p>Hello! I'm Mr. Theerapong Khanta, an accomplished IT Manager with extensive experience in leading technology teams and implementing cutting-edge solutions. My approach combines technical expertise with strategic business acumen to deliver measurable results.</p>
                <p>I believe in the power of technology to transform businesses and create exceptional user experiences. My leadership style fosters collaboration, innovation, and continuous improvement.</p>
                
                <div class="skills">
                    <div class="skill">IT Strategy</div>
                    <div class="skill">Team Leadership</div>
                    <div class="skill">Cloud Computing</div>
                    <div class="skill">Digital Transformation</div>
                    <div class="skill">Project Management</div>
                    <div class="skill">Cybersecurity</div>
                    <div class="skill">Data Analytics</div>
                    <div class="skill">Agile Methodologies</div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Experience Section -->
    <section class="experience" id="experience">
        <h2 class="section-title">My Experience</h2>
        <div class="timeline">
            <div class="timeline-item">
                <div class="timeline-content">
                    <div class="timeline-date">2020 - Present</div>
                    <h3 class="timeline-title">IT Manager</h3>
                    <p class="timeline-desc">Leading a team of 15 IT professionals to implement digital transformation initiatives across the organization. Spearheaded cloud migration project resulting in 40% cost savings.</p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-content">
                    <div class="timeline-date">2017 - 2020</div>
                    <h3 class="timeline-title">Assistant IT Manager</h3>
                    <p class="timeline-desc">Managed enterprise-wide IT projects with budgets up to $2M. Successfully implemented ERP system across 5 business units, improving operational efficiency by 35%.</p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-content">
                    <div class="timeline-date">2014 - 2017</div>
                    <h3 class="timeline-title">Senior IT Support</h3>
                    <p class="timeline-desc">Provided strategic IT consulting services to mid-sized businesses, helping them optimize technology investments and implement scalable solutions.</p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-content">
                    <div class="timeline-date">2012 - 2014</div>
                    <h3 class="timeline-title">IT Support</h3>
                    <p class="timeline-desc">Analyzed business requirements and designed technical solutions to improve workflow automation and data management processes.</p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Projects Section -->
    <section class="projects" id="projects">
        <h2 class="section-title">Featured Projects</h2>
        <div class="projects-grid">
            <div class="project-card">
                <div class="project-image" style="background-image: url('https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80');"></div>
                <div class="project-info">
                    <h3 class="project-title">Enterprise Cloud Migration</h3>
                    <p class="project-desc">Led migration of legacy systems to cloud infrastructure, reducing operational costs by 40% while improving system reliability and scalability.</p>
                    <div class="project-tags">
                        <span class="project-tag">Cloud Computing</span>
                        <span class="project-tag">AWS</span>
                        <span class="project-tag">Migration</span>
                    </div>
                </div>
            </div>
            <div class="project-card">
                <div class="project-image" style="background-image: url('https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1415&q=80');"></div>
                <div class="project-info">
                    <h3 class="project-title">Data Analytics Platform</h3>
                    <p class="project-desc">Developed comprehensive data analytics solution that provided real-time business insights, leading to 25% improvement in decision-making speed.</p>
                    <div class="project-tags">
                        <span class="project-tag">Data Analytics</span>
                        <span class="project-tag">Power BI</span>
                        <span class="project-tag">SQL</span>
                    </div>
                </div>
            </div>
            <div class="project-card">
                <div class="project-image" style="background-image: url('https://images.unsplash.com/photo-1522542550221-31fd19575a2d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80');"></div>
                <div class="project-info">
                    <h3 class="project-title">Cybersecurity Framework</h3>
                    <p class="project-desc">Implemented enterprise-wide cybersecurity framework that reduced security incidents by 90% and ensured compliance with industry regulations.</p>
                    <div class="project-tags">
                        <span class="project-tag">Security</span>
                        <span class="project-tag">Compliance</span>
                        <span class="project-tag">Risk Management</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Contact Section -->
    <section class="contact" id="contact">
        <h2 class="section-title">Get In Touch</h2>
        <div class="contact-form">
            <form>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" placeholder="Your name">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" placeholder="Your email">
                </div>
                <div class="form-group">
                    <label for="subject">Subject</label>
                    <input type="text" id="subject" placeholder="Subject">
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea id="message" placeholder="Your message"></textarea>
                </div>
                <button type="submit" class="submit-btn">Send Message</button>
            </form>
        </div>
    </section>
    
    <!-- Footer -->
    <footer>
        <div class="social-links">
            <a href="#" class="social-link"><i class="fab fa-linkedin-in"></i></a>
            <a href="#" class="social-link"><i class="fab fa-github"></i></a>
            <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
            <a href="#" class="social-link"><i class="fab fa-medium"></i></a>
        </div>
        <p class="copyright">© 2023 Mr. Theerapong Khanta. All rights reserved.</p>
    </footer>
    
    <script>
        // Theme Toggle
        const themeToggle = document.getElementById('themeToggle');
        const body = document.body;
        
        themeToggle.addEventListener('click', () => {
            const isDark = body.getAttribute('data-theme') === 'dark';
            body.setAttribute('data-theme', isDark ? 'light' : 'dark');
            themeToggle.innerHTML = isDark ? '<i class="fas fa-sun"></i>' : '<i class="fas fa-moon"></i>';
        });
        
        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
        
        // Animation on scroll
        const animateOnScroll = () => {
            const elements = document.querySelectorAll('.timeline-item, .project-card');
            
            elements.forEach(element => {
                const elementPosition = element.getBoundingClientRect().top;
                const screenPosition = window.innerHeight / 1.3;
                
                if(elementPosition < screenPosition) {
                    element.style.opacity = '1';
                    element.style.transform = 'translateY(0)';
                }
            });
        };
        
        // Set initial state for animation
        document.querySelectorAll('.timeline-item, .project-card').forEach(element => {
            element.style.opacity = '0';
            element.style.transform = 'translateY(20px)';
            element.style.transition = 'all 0.6s ease';
        });
        
        window.addEventListener('scroll', animateOnScroll);
        window.addEventListener('load', animateOnScroll);
    </script>
</body>
</html>