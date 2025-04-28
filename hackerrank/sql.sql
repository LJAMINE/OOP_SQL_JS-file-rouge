-- Query the list of CITY names from STATION that do not start with vowels. Your result cannot contain duplicates

SELECT DISTINCT CITY
FROM STATION
WHERE LEFT(LOWER(CITY), 1) NOT IN ('a', 'e', 'i', 'o', 'u')
ORDER BY CITY;

-- Query the list of CITY names from STATION that do not end with vowels. Your result cannot contain duplicates.

select DISTINCT CITY
from STATION 
where RIGHT(LOWER(CITY), 1) NOT IN ('a','e','i','o','u')
ORDER BY CITY

-- Query the list of CITY names from STATION that either do not start with vowels or do not end with vowels. Your result cannot contain duplicates.

select DISTINCT CITY
FROM STATION 
WHERE 
LOWER(RIGHT((CITY),1))NOT IN ('a','e','i','u','o')
OR 
LOWER(LEFT((CITY),1))NOT IN ('a','e','i','u','o')
ORDER BY CITY;





-- Write a query to retrieve all prescription payments with status 'completed'.
SELECT * FROM `prescription_payments` WHERE status='completed';



-- Beginner Level-----------------------------------------------------------------------------------------------------------

-- Users by Status: How many users are there for each status category in the users table?
SELECT COUNT(id),status
FROM `users` 
GROUP BY status;
-- Doctors' Names: What are the names of all users who are doctors?
SELECT u.name FROM users u JOIN roles r ON r.id=u.role_id WHERE r.name='doctor';

-- Low-Calorie Diets: What are the diets where the calories are below a specific value (e.g., 50)?
SELECT * FROM `diets`WHERE calories<50;

-- Doctor's Availability: Which schedules are available for a specific doctor?
SELECT * FROM `doctor_schedules` WHERE is_available = 1 AND doctor_id = 8;
-- Medicines for Patient: What medicines have been prescribed for a specific patient?
SELECT m.title,u.name FROM `medicine_prescriptions` mp 
INNER JOIN medicines m ON m.id=mp.medicine_id
INNER JOIN users u ON u.id=mp.patient_id;







-- Intermediate Level----------------------------------------------------------------------------------------

-- Appointments by Patient: What are the appointments for a specific patient, including the doctor's name and the appointment status?
SELECT u.name as pat,d.name as doc,a.status FROM `appointments` a INNER JOIN users u ON u.id=a.patient_id INNER JOIN users d ON d.id=a.doctor_id;

-- Payment Summary: What is the total amount of completed payments for each currency?
SELECT SUM(amount) FROM `prescription_payments`
WHERE status='completed';

-- Active Users and Roles: Who are the active users and what are their roles?
SELECT r.name,u.status  FROM `users` u
INNER JOIN roles r ON u.role_id=r.id
WHERE status='active';
-- Prescriptions and Medicines: What are the prescriptions and their associated medicine details for a specific doctor?
SELECT u.name,m.title ,mp.dosage_instructions FROM `medicine_prescriptions` mp
 INNER JOIN medicines m ON m.id=mp.medicine_id
  INNER JOIN users u ON u.id=mp.doctor_id;



-- Advanced Level--------------------------------------------------------------------------------------------------
-- Doctor Workload: Which doctor has the highest number of appointments in a given time range?
SELECT COUNT(a.id),u.name FROM `appointments` a INNER JOIN users u ON u.id=a.doctor_id GROUP BY u.name;

-- Pending Payments: What are the pending payments, and who are the associated patients and doctors?
SELECT p.name,d.name,pp.id FROM `prescription_payments` pp INNER JOIN medicine_prescriptions mp ON mp.id=pp.prescription_id INNER JOIN users p ON mp.patient_id=p.id INNER JOIN users d ON mp.doctor_id=d.id WHERE pp.status='pending';

-- Prescription Tracking: For a specific patient, what medicines have been prescribed along with their instructions and prescription details?
SELECT p.name,mp.id,mp.dosage_instructions,m.title FROM `medicine_prescriptions` mp INNER JOIN users p ON p.id=mp.patient_id INNER JOIN medicines m ON m.id=mp.medicine_id;

-- Doctor Availability Analysis: Over a specific time period, what percentage of time is a doctor available?