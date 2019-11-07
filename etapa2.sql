SELECT departments.dept_name, concat_ws(' ',employees.first_name, employees.last_name) AS full_name, 
DATEDIFF(dept_emp.to_date,dept_emp.to_date) AS dept_days
FROM employees
INNER JOIN dept_emp ON employees.emp_no = dept_emp.emp_no
INNER JOIN departments ON dept_emp.dept_no =  departments.dept_no
ORDER BY dept_days DESC
LIMIT 10;