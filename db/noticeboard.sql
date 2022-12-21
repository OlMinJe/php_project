create table noticeboard (
   num int not null auto_increment,
   id varchar(15) not null,
   name varchar(10) not null,
   pass varchar(10) not null, 
   subject varchar(100) not null,
   content text not null,        
   regist_day char(20) not null,
   hit int not null,
   primary key(num)
);

