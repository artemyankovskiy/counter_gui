CREATE TABLE counter_type (counter_type_id INT AUTO_INCREMENT, counter_name VARCHAR(45) NOT NULL, description VARCHAR(255), PRIMARY KEY(counter_type_id)) ENGINE = INNODB;
CREATE TABLE counters (counter_id INT AUTO_INCREMENT, counter_type_id INT NOT NULL, network_type_id INT NOT NULL, connection_string VARCHAR(255) NOT NULL, description VARCHAR(255), INDEX network_type_id_idx (network_type_id), INDEX counter_type_id_idx (counter_type_id), PRIMARY KEY(counter_id)) ENGINE = INNODB;
CREATE TABLE counters_values (id INT AUTO_INCREMENT, counter_id INT NOT NULL, timestamp DATETIME NOT NULL, counter_value FLOAT(18, 2) NOT NULL, INDEX counter_id_idx (counter_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE network_type (network_type_id INT AUTO_INCREMENT, network_type VARCHAR(45) NOT NULL, description VARCHAR(255), PRIMARY KEY(network_type_id)) ENGINE = INNODB;
CREATE TABLE object_type (id INT AUTO_INCREMENT, object_type VARCHAR(45) NOT NULL, linked_table VARCHAR(45) NOT NULL, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE objects (object_id INT AUTO_INCREMENT, parent_id INT, object_type_id INT NOT NULL, object_link_id INT NOT NULL, INDEX object_type_id_idx (object_type_id), INDEX object_link_id_idx (object_link_id), PRIMARY KEY(object_id)) ENGINE = INNODB;
CREATE TABLE permission_type (permission_type_id SMALLINT, permission VARCHAR(45) NOT NULL, PRIMARY KEY(permission_type_id)) ENGINE = INNODB;
CREATE TABLE users_group (gid INT AUTO_INCREMENT, groupname VARCHAR(45) NOT NULL, info VARCHAR(255) NOT NULL, PRIMARY KEY(gid)) ENGINE = INNODB;
CREATE TABLE users_groups (id INT AUTO_INCREMENT, uid INT NOT NULL, gid INT NOT NULL, INDEX gid_idx (gid), INDEX uid_idx (uid), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE users_passwd (uid INT AUTO_INCREMENT, gid INT NOT NULL, username VARCHAR(45) NOT NULL, info VARCHAR(255) NOT NULL, password VARCHAR(45) NOT NULL, INDEX gid_idx (gid), PRIMARY KEY(uid)) ENGINE = INNODB;
CREATE TABLE users_permissions (id INT AUTO_INCREMENT, object_id INT NOT NULL, uid INT NOT NULL, gid INT NOT NULL, user_read_perm SMALLINT NOT NULL, user_write_perm SMALLINT NOT NULL, user_exec_perm SMALLINT NOT NULL, group_read_perm SMALLINT NOT NULL, group_write_perm SMALLINT NOT NULL, group_exec_perm SMALLINT NOT NULL, INDEX uid_idx (uid), INDEX gid_idx (gid), INDEX object_id_idx (object_id), PRIMARY KEY(id)) ENGINE = INNODB;
ALTER TABLE counters ADD CONSTRAINT counters_network_type_id_network_type_network_type_id FOREIGN KEY (network_type_id) REFERENCES network_type(network_type_id);
ALTER TABLE counters ADD CONSTRAINT counters_counter_type_id_counter_type_counter_type_id FOREIGN KEY (counter_type_id) REFERENCES counter_type(counter_type_id);
ALTER TABLE counters_values ADD CONSTRAINT counters_values_counter_id_counters_counter_id FOREIGN KEY (counter_id) REFERENCES counters(counter_id);
ALTER TABLE objects ADD CONSTRAINT objects_object_type_id_object_type_id FOREIGN KEY (object_type_id) REFERENCES object_type(id);
ALTER TABLE objects ADD CONSTRAINT objects_object_link_id_counters_counter_id FOREIGN KEY (object_link_id) REFERENCES counters(counter_id);
ALTER TABLE users_groups ADD CONSTRAINT users_groups_uid_users_passwd_uid FOREIGN KEY (uid) REFERENCES users_passwd(uid);
ALTER TABLE users_groups ADD CONSTRAINT users_groups_gid_users_group_gid FOREIGN KEY (gid) REFERENCES users_group(gid);
ALTER TABLE users_passwd ADD CONSTRAINT users_passwd_gid_users_group_gid FOREIGN KEY (gid) REFERENCES users_group(gid);
ALTER TABLE users_permissions ADD CONSTRAINT users_permissions_uid_users_passwd_uid FOREIGN KEY (uid) REFERENCES users_passwd(uid);
ALTER TABLE users_permissions ADD CONSTRAINT users_permissions_object_id_objects_object_id FOREIGN KEY (object_id) REFERENCES objects(object_id);
ALTER TABLE users_permissions ADD CONSTRAINT users_permissions_gid_users_group_gid FOREIGN KEY (gid) REFERENCES users_group(gid);
