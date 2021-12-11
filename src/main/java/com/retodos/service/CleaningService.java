/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.retodos.service;

import com.retodos.model.Cleaning;
import com.retodos.repository.CleaningRepository;
import java.util.List;
import java.util.Optional;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

@Service
public class CleaningService {

    @Autowired
    private CleaningRepository repositorio;

    public List<Cleaning> listAll() {
        return repositorio.listAll();
    }

    public Optional<Cleaning> getClear(String reference) {
        return repositorio.getAccesory(reference);
    }

    public Cleaning create(Cleaning clear) {
        if (clear.getReference() == null) {
            return clear;
        } else {
            return repositorio.create(clear);
        }
    }

    public Cleaning update(Cleaning clear) {

        if (clear.getReference() != null) {
            Optional<Cleaning> clearDb = repositorio.getAccesory(clear.getReference());
            if (!clearDb.equals("")) {
                if (clear.getBrand() != null) {
                    clearDb.get().setBrand(clear.getBrand());
                }

                if (clear.getCategory() != null) {
                    clearDb.get().setCategory(clear.getCategory());
                }

                if (clear.getMaterial() != null) {
                    clearDb.get().setMaterial(clear.getMaterial());
                }

                if (clear.getDescription() != null) {
                    clearDb.get().setDescription(clear.getDescription());
                }
                if (clear.getPrice() != 0.0) {
                    clearDb.get().setPrice(clear.getPrice());
                }
                if (clear.getQuantity() != 0) {
                    clearDb.get().setQuantity(clear.getQuantity());
                }
                if (clear.getPhotography() != null) {
                    clearDb.get().setPhotography(clear.getPhotography());
                }
                clearDb.get().setAvailability(clear.isAvailability());
                repositorio.update(clearDb.get());
                return clearDb.get();
            } else {
                return clear;
            }
        } else {
            return clear;
        }
    }

    public boolean delete(String reference) {
        Boolean aBoolean = getClear(reference).map(accesory -> {
            repositorio.delete(accesory);
            return true;
        }).orElse(false);
        return aBoolean;
    }
}