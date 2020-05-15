CREATE TABLE country_master (country_cd varchar(5) not null, description varchar(50) not null, PRIMARY KEY(country_cd));

CREATE TABLE state_master (state_cd varchar(5) not null, description varchar(50) not null, PRIMARY KEY (state_cd));

CREATE TABLE district_master (district_cd varchar(5) not null, description varchar(50) not null, state_cd varchar(5) not null PRIMARY KEY(district_cd), FOREIGN KEY(State_cd) REFERENCES state_master(state_cd));

CREATE TABLE admnarea( admn_area varchar(9), description varchar(30), PRIMARY KEY (admn_area));

CREATE TABLE office_field_cd(office_cd varchar(8) not null, name varchar(60), addr varchar(120), city varchar(40), pin_code varchar(40), admn_area varchar(12), district_cd varchar(5), opened_on datetime, closed varchar(1), closed_on datetime, reason_clo varchar(30), ent_date datetime, user_id varchar(60), PRIMARY KEY (office_cd), FOREIGN KEY (admn_area) REFERENCES admnarea(admn_area) ,FOREIGN KEY (district_cd) REFERENCES district_master(district_cd));
  
INSERT INTO state_master values('s001','uttar pradesh');

INSERT INTO district_master values('c009', 'aligarh','s001');
INSERT INTO district_master values('c008', 'prayagraj','s001');
INSERT INTO district_master values('c007', 'agra','s001');


INSERT INTO admnarea VALUES('a001','prakash');
INSERT INTO admnarea VALUES ('a003','rakesh');
INSERT INTO admnarea VALUES('a005','dinesh');

INSERT INTO office_field_cd values ('c91','Bangalore OFFICE','BANGALORE ADDRESS','bangalore','202020','a005','c009',null,null,null,null,null,null);

















