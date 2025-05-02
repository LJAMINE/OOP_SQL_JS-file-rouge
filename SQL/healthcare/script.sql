-- SQL Exercises
-- Retrieve all patients who have an active status

SELECT * FROM `users`
INNER JOIN roles r ON r.id=users.role_id
WHERE role_id=2 AND users.status='active';

-- List all appointments scheduled for April 2025.

SELECT * FROM `appointments`
WHERE appointment_date BETWEEN '2025-04-01' AND '2025-04-30';

-- Find the total number of appointments canceled by patients.

SELECT COUNT(a.id) FROM `appointments` a
INNER JOIN users u ON u.id=a.patient_id
INNER JOIN roles r ON r.id=u.role_id
WHERE a.status='cancelled';

-- Retrieve the names of doctors with at least one accepted appointment.

SELECT Count(a.id),u.name FROM `appointments` a 
INNER JOIN users u ON u.id=a.doctor_id
INNER JOIN roles r ON r.id=u.role_id
WHERE a.status='accepted'
group by u.name;

-- Find the sum of all prescription payments made in USD currency.

SELECT SUM(p.amount) FROM `prescription_payments` p
WHERE p.currency = 'USD';
;

-- List all the diets created by the user with the name "doctor1".

SELECT d.title FROM `diets` d
INNER JOIN users u ON u.id=d.user_id
WHERE u.name='doctor1';

-- Retrieve all medicines prescribed for patients with the role_id of 3.
SELECT m.title FROM `medicine_prescriptions` mp 
INNER JOIN appointments a ON a.id=mp.appointment_id
INNER JOIN medicines m ON m.id=mp.medicine_id
INNER JOIN users u ON u.id=a.patient_id
INNER JOIN roles r ON r.id=u.role_id 
WHERE u.role_id=3;

-- List all available doctor schedules on dates that fall in the year 2025.

SELECT u.name FROM `doctor_schedules` d 
INNER JOIN users u ON u.id=d.doctor_id
WHERE is_available=1 AND  schedule_date BETWEEN '2025-01-01' AND '2025-12-30';

-- Find all appointments where the duration (end_time - start_time) is greater than one hour.

SELECT * FROM `appointments`
WHERE end_time-start_time>'01:00:00';


-- Find all prescriptions linked to the appointment with ID 34.
SELECT * FROM `medicine_prescriptions` mp
INNER JOIN appointments a ON a.id=mp.appointment_id 
WHERE a.id=34;

-- Retrieve the details of users who have no associated diets.

SELECT * FROM `users` u
LEFT JOIN diets d ON d.user_id=u.id
WHERE d.user_id IS null AND u.role_id=2;

-- List all prescriptions with payment status as "completed".

SELECT * FROM `medicine_prescriptions` mp 
INNER JOIN prescription_payments p ON p.prescription_id=mp.id
WHERE p.status='completed';

-- Find the top 3 doctors with the most accepted appointments in April 2025.

SELECT COUNT(a.doctor_id),u.name FROM `appointments` a 
INNER JOIN users u ON u.id=a.doctor_id
WHERE a.appointment_date BETWEEN '2025-04-01' AND '2025-04-28'
GROUP BY u.name;

-- Retrieve all appointments that have no notes provided.

SELECT a.id FROM `appointments` a 
INNER JOIN users u ON u.id=a.doctor_id
WHERE a.notes IS NOT null;

-- List all users who have a role as "admin".
SELECT *
FROM users u
INNER JOIN roles r ON r.id=u.role_id
WHERE r.name='admin';

-- Find all diets where the calorie count is greater than the average calorie count of all diets.

SELECT   d.title , COUNT(d.calories)AS countcal  , AVG(d.calories)AS avgcal FROM `diets` d 
GROUP BY d.title
HAVING countcal<avgcal;

-- Retrieve all prescription payments where the amount is greater than $100.
SELECT * FROM `prescription_payments` pp
WHERE pp.amount>100;

-- List all appointments that were canceled, along with the name of the person who canceled them.

SELECT u.name FROM `appointments` a
INNER JOIN users u ON u.id=a.doctor_id
INNER JOIN users p ON p.id=a.patient_id
WHERE a.status='cancelled';

