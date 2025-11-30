create table hospital(h_no int primary key,
h_name varchar[50] NOT NULL,
h_city varchar[50]);

create table doctor(d_no int primary key,
d_name varchar[50] NOT NULL,
d_city varchar[50] NOT NULL,
d_address varchar[50] NOT NULL,
area varchar[50],
h_no int references hospital(h_no));

