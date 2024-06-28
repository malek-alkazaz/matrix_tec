# Assessment for Senior Laravel Developer

This assessment is designed to test an examinee’s knowledge of PHP Design principles and its implementations on the Laravel framework. It consists of three levels, and each level has specific features that need to be implemented.

## Assessment Point System

The assessment total is 125 points with an additional 32 bonus points. The passing grade is 100.

| Levels | Points | Bonus | Total |
|--------|--------|-------|-------|
| Level 1 | 50     | 12    | 62    |
| Level 2 | 45     | 10    | 55    |
| Level 3 | 30     | 10    | 40    |
| TOTAL  | 125    | 32    | 157   |

## Assessment Duration and Contact

Examinees are given 3 days to complete the assessment. For any questions regarding the exam, please send an inquiry to info@sourcecode-ai.com or HR.

## Output Submission

Examinees are expected to send an email with attachments of their output files (preferably a zip file). Alternatively, they can attach a link to their GitHub Repository, Google Drive, Dropbox, or any other storage service to download the output if the file is too large to be attached to email or for other reasons.

## Level 1

### Goals

- [ ] Implement Laravel’s default login feature
- [ ] Develop User CRUD functionalities

### Prerequisites

Base the user migration file on the following table:
mysql> show columns from users;
+-------------------+-----------------+------+-----+---------+----------------+
| Field | Type | Null | Key | Default | Extra |
+-------------------+-----------------+------+-----+---------+----------------+
| id | bigint unsigned | NO | PRI | NULL | auto_increment |
| prefixname | varchar(255) | YES | | NULL | |
| firstname | varchar(255) | NO | | NULL | |
| middlename | varchar(255) | YES | | NULL | |
| lastname | varchar(255) | NO | | NULL | |
| suffixname | varchar(255) | YES | | NULL | |
| username | varchar(255) | NO | UNI | NULL | |
| email | varchar(255) | NO | UNI | NULL | |
| password | text | NO | | NULL | |
| photo | text | YES | | NULL | |
| type | varchar(255) | YES | MUL | user | |
| remember_token | varchar(100) | YES | | NULL | |
| email_verified_at | timestamp | YES | | NULL | |
| created_at | timestamp | YES | | NULL | |
| updated_at | timestamp | YES | | NULL | |
| deleted_at | timestamp | YES | | NULL | |
+-------------------+-----------------+------+-----+---------+----------------+














