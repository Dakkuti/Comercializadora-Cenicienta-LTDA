package com.retodos;

import com.retodos.model.User;
import com.retodos.repository.crud.CleaningCrudRepository;
import com.retodos.repository.crud.UserCrudRepository;
import java.text.SimpleDateFormat;
import java.time.format.DateTimeFormatter;
import java.util.List;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.boot.CommandLineRunner;
import org.springframework.boot.SpringApplication;
import org.springframework.boot.autoconfigure.SpringBootApplication;

@SpringBootApplication
public class RetodosApplication implements CommandLineRunner {

    @Autowired
    private UserCrudRepository userRepo;
    @Autowired
    private CleaningCrudRepository cleaningCrud;

    public static void main(String[] args) {
        SpringApplication.run(RetodosApplication.class, args);
    }

    @Override
    public void run(String... args) throws Exception {
        System.out.println("Aqui se ejecutaran la creación de documentos de mongo...");
        
        userRepo.deleteAll();
        cleaningCrud.deleteAll();

    }
}
