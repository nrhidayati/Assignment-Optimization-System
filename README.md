# 🎯 Assignment Optimization System

## 📌 Overview
Assignment Optimization System is a web-based system developed to help students determine the best combination of easy and hard assignments to complete using Linear Programming.

The system focuses on maximizing the total number of assignments that can be completed based on assignment availability, assignment limit, and time or effort constraints.

---

## 🧠 How It Works
- User inputs the total number of easy and hard assignments available.
- User inputs the maximum number of assignments that can be completed.
- User inputs the time or effort needed for one easy assignment and one hard assignment.
- User inputs the total time available.
- The system automatically converts the user input into Linear Programming constraints.
- The system evaluates all possible combinations.
- The system selects the optimal solution that maximizes the total number of assignments completed.

---

## 📊 Mathematical Model

### Decision Variables
- x₁ = Number of easy assignments selected
- x₂ = Number of hard assignments selected

### Objective Function
Maximize:

Z = x₁ + x₂

Where:
- Z = Total number of assignments completed

### Constraints
1. Assignment limit:

x₁ + x₂ ≤ Maximum Assignments Can Be Completed

2. Time / effort limit:

Easy Time(x₁) + Hard Time(x₂) ≤ Total Time Available

3. Assignment availability:

x₁ ≤ Total Easy Assignments Available

x₂ ≤ Total Hard Assignments Available

4. Non-negativity:

x₁, x₂ ≥ 0

---

## 📈 Features
- User-friendly Linear Programming input form
- Automatic LP constraint generation
- Optimal solution detection
- Feasible region graph using Chart.js
- Step-by-step optimization logs
- MySQL history storage
- Simple and responsive web interface

---

## 🖥️ Technologies Used
- PHP
- MySQL
- HTML
- CSS
- Bootstrap
- JavaScript
- Chart.js

---

## 🎯 Purpose
The purpose of this system is to help students manage assignments efficiently by finding the best combination of easy and hard assignments that can be completed within limited time, effort, and availability.

---

## 📊 Demo Example

### Input
- Total Easy Assignments Available = 2
- Total Hard Assignments Available = 5
- Maximum Assignments Can Be Completed = 4
- Time for 1 Easy Assignment = 1
- Time for 1 Hard Assignment = 2
- Total Time Available = 6

---

### Generated Linear Programming Model

Decision Variables:
- x₁ = Number of easy assignments selected
- x₂ = Number of hard assignments selected

Objective Function:

Z = x₁ + x₂

Constraints:
- x₁ + x₂ ≤ 4
- 1x₁ + 2x₂ ≤ 6
- x₁ ≤ 2
- x₂ ≤ 5
- x₁, x₂ ≥ 0

---

### Process
The system evaluates all possible feasible combinations:

- (0,0) → Z = 0
- (0,1) → Z = 1
- (0,2) → Z = 2
- (0,3) → Z = 3
- (1,0) → Z = 1
- (1,1) → Z = 2
- (1,2) → Z = 3
- (2,0) → Z = 2
- (2,1) → Z = 3
- (2,2) → Z = 4 ✅

---

### Output
- Easy Assignments Selected = 2
- Hard Assignments Selected = 2
- Maximum Total Assignments = 4

---

### Explanation
The system selects 2 easy assignments and 2 hard assignments because this combination gives the maximum total number of assignments completed while satisfying all constraints.

Calculation:

- Total assignments = 2 + 2 = 4
- Total time used = (2 × 1) + (2 × 2) = 6

This satisfies:
- Maximum assignments limit = 4
- Total time available = 6
- Easy assignments available = 2
- Hard assignments available = 5

---

## 🗄️ Database
The system uses MySQL to store optimization history.

The `history` table stores:
- Easy assignments available
- Hard assignments available
- Maximum assignments limit
- Easy assignment time
- Hard assignment time
- Total time available
- Optimization result

---

## ▶️ How to Run the System

1. Install and open XAMPP.
2. Start Apache and MySQL.
3. Copy the project folder into:
4. Open phpMyAdmin in your browser:
   - http://localhost/phpmyadmin
5. Create a new database named:
   - lp_system
6. Import the database file:
   - db.sql
7. Run the system in your browser:
   - http://localhost/lp_system/input.php

## 📸 System Screenshots

Screenshots of the system are included in the presentation slides.

- Homepage
- Input Page
- Result Page
- History Page
- Database Table