drop database if exists DM_site_internet;
create database DM_site_internet;
use DM_site_internet;

create table patient(
    idpatient int(5) not null auto_increment,
    nom varchar(50),
    prenom varchar(50),
    adresse varchar(50),
    telephone int,
    email varchar(50),
    age int,
    primary key(idpatient)
);

create table rdv(
    idrdv int(5) not null auto_increment,
    daterdv date,
    heure time,
    adresse varchar(50),
    primary key(idrdv)
);

create table medecin(
    idmedecin int(3) not null auto_increment,
    nom varchar(50),
    prenom varchar(50),
    adresse varchar(50),
    telephone int,
    specialite varchar(50),
    email varchar(50),
    primary key(idmedecin)
);

create table ordonnance(
    idordonnance int(5) not null auto_increment,
    libelle varchar(50),
    nommedecin varchar(50),
    daterenouvellement date,
    periodeprise varchar(50),
    recurrence varchar(50),
    primary key (idordonnance)
);

create table medicament(
    idmedicament int(5) not null auto_increment,
    nom varchar(50),
    utilisation varchar(50),
    physiologie varchar(50),
    primary key (idmedicament)
);

create table specialisation(
    idspecialisation int(5) not null auto_increment,
    domaine varchar(50),
    primary key (idspecialisation)
);