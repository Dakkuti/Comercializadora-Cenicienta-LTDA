
package com.retodos.controller;

import com.retodos.model.Cleaning;
import com.retodos.service.CleaningService;
import java.util.List;
import java.util.Optional;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.http.HttpStatus;
import org.springframework.web.bind.annotation.DeleteMapping;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.PutMapping;
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.ResponseStatus;
import org.springframework.web.bind.annotation.RestController;


@RestController
@RequestMapping("/api/cleaningproduct")
public class CleaningController {

    @Autowired
    private CleaningService servicio;

    @GetMapping("/all")
    public List<Cleaning> listAll() {
        return servicio.listAll();
    }

    @GetMapping("/{reference}")
    public Optional<Cleaning> getAccesory(@PathVariable("reference") String reference) {
        return servicio.getClear(reference);
    }

    @PostMapping("/new")
    @ResponseStatus(HttpStatus.CREATED)
    public Cleaning create(@RequestBody Cleaning clear) {
        return servicio.create(clear);
    }

    @PutMapping("/update")
    @ResponseStatus(HttpStatus.CREATED)
    public Cleaning update(@RequestBody Cleaning clear) {
        return servicio.update(clear);
    }

    @DeleteMapping("/{reference}")
    @ResponseStatus(HttpStatus.NO_CONTENT)
    public boolean delete(@PathVariable("reference") String reference) {
        return servicio.delete(reference);
    }
}
