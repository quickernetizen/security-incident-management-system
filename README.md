# Security Incident Management System

A web-based Security Incident Management System developed using PHP, MySQL, Bootstrap, and REST APIs.

## Project Overview

This project helps Security Operations Center (SOC) teams manage and track security incidents efficiently.

Users can:

- Create incidents
- Assign incidents to analysts
- Track severity levels
- Update incident status
- Monitor incident trends
- Manage security investigations

---

## ScreenShot

<img width="1536" height="1024" alt="Project_SS" src="https://github.com/user-attachments/assets/9e256830-26e7-45d6-ae5a-dbf3251a3e37" />


## Technologies Used

### Backend

- PHP
- REST APIs

### Database

- MySQL

### Frontend

- HTML5
- CSS3
- Bootstrap 5
- JavaScript

### Version Control

- Git
- GitHub

---

## Features

### Authentication

- User Registration
- User Login
- Session Management

### Incident Management

- Create Incident
- View Incidents
- Update Incident
- Delete Incident

### Dashboard

- Total Incidents
- Severity Distribution
- Status Tracking

### Security

- Password Hashing
- Session Authentication
- Input Validation

---

## Project Structure

```text
security-incident-management-system/

├── auth/
├── config/
├── dashboard/
├── database/
├── README.md
```

---

## Database Schema

### Users Table

| Column | Type |
|----------|----------|
| id | INT |
| full_name | VARCHAR |
| email | VARCHAR |
| password | VARCHAR |
| role | ENUM |

### Incidents Table

| Column | Type |
|----------|----------|
| id | INT |
| title | VARCHAR |
| description | TEXT |
| severity | ENUM |
| status | ENUM |
| assigned_to | VARCHAR |

---

## Future Enhancements

- Role-Based Access Control (RBAC)
- Email Notifications
- Incident Analytics Dashboard
- Threat Intelligence Integration
- Audit Logs
- API Authentication

---

## Author

Alok Bhagat

Cybersecurity Analyst | SOC Operations | Incident Response | Threat Hunting | Security Automation
