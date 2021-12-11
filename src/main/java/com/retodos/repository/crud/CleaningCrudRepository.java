
package com.retodos.repository.crud;

import com.retodos.model.Cleaning;
import org.springframework.data.mongodb.repository.MongoRepository;


public interface CleaningCrudRepository extends MongoRepository<Cleaning, String> {
    
}
