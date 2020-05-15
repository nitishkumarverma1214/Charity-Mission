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

CREATE TABLE profession_master(Profession_cd varchar(3) not null, description varchar(50) not null, PRIMARY KEY(Profession_cd));

INSERT INTO profession_master values('014','ADVOCATE'),('024','AGRICULTURE'),('038','ARMY'),('007','BISHOP');

CREATE TABLE qualification_master (qual_cd varchar(3) not null, description varchar(50) not null, PRIMARY KEY(qual_cd));

INSERT INTO qualification_master values('007','+1'),('008','+2'),('001','3RD'),('002','5TH'),('003','7TH'),('004','8TH');


CREATE TABLE responsibility_master (resp_cd varchar(3) not null, description varchar(50) not null, PRIMARY KEY(resp_cd));

INSERT INTO responsibility_master values('004','ASSOCIATE GENERAL SECRETARY'),('005','BOARD MEMBER'),('007','DIRECTOR OF PROMOTIONAL MINISTRY'),('006','GENERAL SECRETARY'),('009','MISSIONARY');


CREATE TABLE relationship_master (rel_cd varchar(3) not null, description varchar(50) not null, PRIMARY KEY(rel_cd));

INSERT INTO relationship_master values('003','BROTHER'),('010','BROTHER IN LAW'),('009','DAUGHTER'),('001','FATHER'),('014','GRAND DAUGHTER');


CREATE TABLE blood_grp_master (blood_grp_cd varchar(3) not null, description varchar(50) not null, PRIMARY KEY(blood_grp_cd));

INSERT INTO blood_grp_master values ('002','A NEGATIVE'),('001','A POSITIVE'),('006','AB NEGATIVE'),('005','AB POSITIVE'),('004','B NEGATIVE'),('003','B POSITIVE');

CREATE TABLE language_master (lang_cd varchar(3) not null, description varchar(50) not null, PRIMARY KEY(lang_cd));

INSERT INTO language_master values ('03','ENGLISH'),('02','HINDI'),('05','KANNADAM'),('04','MALAYALAM'),('07','ODIYA'),('01','TAMIL');

CREATE TABLE spon_type_master (spon_type varchar(3) not null, description varchar(50) not null, PRIMARY KEY(spon_type));

INSERT INTO spon_type_master values('001','MISSIONARY SPONSOR'),('002','MITC LIFE SPONSOR');



















