
package com.retodos.repository;

import com.retodos.model.Cleaning;
import com.retodos.repository.crud.CleaningCrudRepository;
import java.util.List;
import java.util.Optional;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Repository;


@Repository
public class CleaningRepository {

    @Autowired
    private CleaningCrudRepository crudInterface;

    public List<Cleaning> listAll() {
        return crudInterface.findAll();
    }

    public Optional<Cleaning> getAccesory(String reference) {
        return crudInterface.findById(reference);
    }

    public Cleaning create(Cleaning cleaning) {
        return crudInterface.save(cleaning);
    }

    public void update(Cleaning cleaning) {
        crudInterface.save(cleaning);
    }

    public void delete(Cleaning cleaning) {
        crudInterface.delete(cleaning);
    }
}

