require 'httparty'
class LaborsocialController < ApplicationController
    include HTTParty
  
    def index
        @datos = HTTParty.get "http://localhost:8000/api/laborsocial"
    end

    def show
        @datos = HTTParty.get "http://localhost:8000/api/laborsocial/" + params.require(:id)
    end

    def new
        
    end

    def destroy
        HTTParty.delete "http://localhost:8000/api/laborsocial/" + params.require(:id)
    end

    def create
        
    end

    private    
        def laborsocial_params
            params.require(:dato).permit(:nombres, :categoria, :finicial, :ffinal, :perfil, :descripcion, :competencias, :oferta)
        end
end
