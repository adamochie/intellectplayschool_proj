# intellectplayschool_proj

We are to assign to create a website for a preschool by the owner of Intellect Playschool located at Johor Bahru, 
My team consist of 5 people, I am in charge of the attendance module which was quite hard. However, we managed to complete our website in less than 3 months 

This module is for every user who is a parent, a teacher and an admin; since admin inherits teacher. The module must be accessed through the login module. Every user can access the Attendance module. This module will record the students’ attendance and RTK test results weekly, which parent will be responsible for updating. Parent only can manage student weekly attendance to avoid excessive food. Parent must use the “Update Attendance” function and “Upload RTK Test result” function to update their students' attendance. However, optionally use the “Provide Reasoning” function to give reasons for absence. Teacher and parent users both can use the “View Student Attendance” function which will be different for teacher and parent respectively. The teacher can view all of the students' attendance while the parent can only view the student they are responsible for. Last but not least, only teachers can use the “Confirm student daily attendance” function from the “Update attendance” function for attendance confirmation and the ”Confirm self attendance” as attendance data to be recorded for salary purposes. The parent will not have access to make the confirmation.

All attributes in entity Attendance: 
Att_ID: Attendance unique id number
Att_category: Indicates whether it is for the student attendance or the teacher. (1-teacher, 0-student)
Att_type: Indicates whether the students or teacher are present or absent or going overtime. (2-OverTime , 1-present, 0-absent)
Att_date: Date of the attendance record.
Att_reasonDesc: An optional attribute which allows any additional information like reasoning on the student absence.
Att_RTKstatus: Status on the RTK test (0- negative, 1- positive)
Att_RTKmedia: RTK test uploaded by user.
Att_confirmation: The confirmation field for a teacher to indicate the student attendance. (0-unconfirm, 1-confirmed)

Transaction Requirement: Data Entry
Parent and teacher enters the following:
- Enter the students' attendance. [Update attendance]
- Enter the reason for students’ absence. [Update attendance]
- Upload the RTK test result. [Upload RTK test result]
- Teacher enter self attendance [Confirm self attendance]

Transaction Requirement: Data Update/Deletion
Teacher/Admin and parent are allowed to:
- Teacher confirms the student's daily attendance. [Confirm student daily attendance]
- Parent edits the entered students’ attendance [update attendance]
- Teacher edits the entered self attendance [Confirm self attendance]

Transaction Requirement: Data Queries
Queries of the attendance will include the following:
- List all of the students' attendance. [View student attendance]
- List all of the students’ reasons of absence. [View student attendance]
- List the students’ RTK test status and result. [View student attendance]

