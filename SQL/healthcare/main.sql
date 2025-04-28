-- Basic Exercises-------------------------------------------------------

-- List all users who have the role of doctor.

SELECT * FROM `users` u JOIN roles r ON u.role_id=r.id WHERE r.name='doctor';

-- Find all active patients and display their name, email, and phone number.

SELECT u.name,u.email,u.phone_number FROM `users` u JOIN roles r ON u.role_id=r.id WHERE r.name='patient' AND u.status='active';

-- Count how many users are registered for each role type.

SELECT COUNT(*),r.name FROM `users` u JOIN roles r ON u.role_id=r.id GROUP BY r.name;

-- List all users who don't have a location specified.

SELECT * FROM `users` WHERE location is null;


-- Find all users whose name contains "am".

SELECT name FROM users WHERE name LIKE "%am%";









-- Intermediate Exercises-------------------------------------------------------
-- Write a query to join users and roles tables to show each user's name and their role name.

SELECT u.email,r.name FROM `users` u INNER JOIN roles r ON r.id=u.role_id;

-- List all doctors (show their name and email) who are inactive.

SELECT name, email FROM `users` WHERE status='inactive' AND role_id=2;

-- Create a query to count how many active and inactive users are in the database, grouped by their status.

SELECT COUNT(*),u.status
FROM users u 
GROUP BY u.status;

-- Find the most recently registered user in the system.
SELECT * FROM users ORDER BY users.created_at DESC LIMIT 1 ;

-- Join the appointments table with users to show all appointments with the doctor's name and patient's name.
SELECT p.name,u.name,a.id,a.appointment_date
FROM appointments a 
INNER JOIN users u ON u.id=a.doctor_id
INNER JOIN users p ON p.id=a.patient_id;

-- Advanced Exercises-------------------------------------------------------

-- Find all doctors who don't have any scheduled appointments yet.
SELECT *
FROM users u 
LEFT JOIN appointments a ON a.doctor_id=u.id
WHERE u.role_id=2 AND a.doctor_id is null;

-- Write a query to show all patients and the number of appointments they've had.

SELECT u.name,COUNT(a.id)
FROM `users`  u 
LEFT JOIN appointments a ON a.patient_id=u.id
WHERE role_id=3
GROUP BY u.name,u.id;

-- Find all appointments that are scheduled to happen within the next week (you'll need to use date functions).
SELECT * FROM appointments a WHERE a.appointment_date BETWEEN CURDATE() AND DATE_ADD(CURDATE(), INTERVAL 7 DAY);

-- Create a query to find the doctor with the most appointments.
SELECT COUNT(a.id) as new, u.name
FROM appointments a 
INNER JOIN users u ON u.id=a.doctor_id
WHERE u.role_id=2
GROUP BY u.name
ORDER by new desc
LIMIT 1;

-- Join users, appointments, and medicine_prescriptions to show all prescriptions with patient name, doctor name, and appointment date.

SELECT p.name,d.name ,mp.id,a.appointment_date  FROM appointments a
INNER JOIN users p ON p.id=a.patient_id
INNER JOIN users d ON d.id=a.patient_id
INNER JOIN medicine_prescriptions mp ON mp.appointment_id=a.id;

-- Expert Exercises-------------------------------------------------------
-- Find patients who have appointments but don't have any medicine prescriptions.


-- Write a query to show the average number of appointments per doctor.

-- Create a query to find all medicines prescribed by a specific doctor.

-- Find all appointments that have a status of "accepted" and include the patient's and doctor's contact information.

-- Build a query to find all patients who have appointments with more than one doctor.





