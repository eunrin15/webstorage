# 창의적종합설계1
리눅스 서버 기반 웹 데이터 스토리지 프로젝트

## 1. 환경
1. MariaDB

2. Apache

3. PHP

##  2.라이브러리
1. php-gd

2. jquery

3. ffmpeg = https://toshi15shkim.github.io/articles/2019-09/etc-ffmpeg-install

## 3.DB

### 회원db

```sql
create table USERINFO (
id varchar(15) primary key,
pw varchar (30) not null,
tel varchar(15) not null,
name varchar(30) not null,
grade varchar(30) not null default 'basic' );
```

### 파일저장DB

```sql
CREATE TABLE DATAINFO (
FILE_NAME VARCHAR(30),
FILE_ORIGIN_NAME VARCHAR(30) NOT NULL,
FILE_EXTENSION VARCHAR(10) NOT NULL,
FILE_SIZE BIGINT NOT NULL,
FILE_PATH VARCHAR(50) NOT NULL,
FILE_USER_ID VARCHAR(30) NOT NULL,
FILE_THUM_PATH VARCHAR(50),
PRIMARY KEY(FILE_NAME),
FOREIGN KEY (FILE_USER_ID) REFERENCES USERINFO(id)
)
ENGINE = InnoDB;
```

### 파일공유 그룹 DB


<<<<<<< HEAD
'''sql
=======
```sql
>>>>>>> ks
create table SHAREINFO (
SHARE_CODE VARCHAR(30) primary key,
SHARE_NAME VARCHAR(30) not null,
SHARE_USERS VARCHAR(255) not null );
<<<<<<< HEAD
'''
=======
```

##  4. 기능
- 저장소 페이지
    - 1 파일 업로드 및 다운로드
    - 2 파일 드래그 드롭
    - 3 파일 종류별 보기
    - 4 휴지통
    - 5 새로운 디렉토리 생성

- 공유 폴더

- 홈페이지 유저 정보 관리
>>>>>>> ks
